<?php
/**
 *
 * This file is part of IkoBB Forum and belongs to the module <template>.
 *
 * @copyright (c) IkoBB <https://www.ikobb.de>
 * @license       GNU General Public License, version 3 (GPL-3.0)
 *
 * For full copyright and license information, please see
 * the LICENSE file.
 *
 */

namespace Iko;

use Emojione;

class parser
{
	public static function bbCodes($string)
	{
		/** disable html tags */
		$string = str_replace(array (
			'<',
			'>'), array (
			'&lt;',
			'&gt;'), $string);
		$string = str_replace(array (
			"\r\n",
			"\r",
			"\n"), "<br>", $string);


		$tags = array (
			// First parsing BBCodes where no inner BBCodes are allowed
			// No BBCodes allowed
			'#\\[noparse\\](.*?)\\[/noparse\\]#uis' => function ($matches) {
				$matches[1] = str_replace(array (
					'[',
					']',
					':',), array (
					'&#91;',
					'&#93;',
					'&#58;',), $matches[1]);

				return $matches[1];
			},
			/** Inline Code  */
			'#\\[tt\\](.*?)\\[/tt\\]#uis' => function ($matches) {
				$matches[1] = str_replace(array (
					'[',
					']',
					':',), array (
					'&#91;',
					'&#93;',
					'&#58;',), $matches[1]);

				return '<code>' . $matches[1] . '</code>';
			},
			/** codeblock without a specific brush */
			'#\\[code\\](.*?)\\[/code\\]#uis' => function ($matches) {
				$matches[1] = str_replace(array (
					'[',
					']',
					':',
					'<br>'), array (
					'&#91;',
					'&#93;',
					'&#58;',
					"\n"), $matches[1]);

				return self::syntax_highlighter($matches[1]);
			},
			/** codeblock with a specific language */
			'#\\[code=([^\\]]*?)\\](.*?)\\[/code\\]#uis' => function ($matches) {
				$matches[2] = str_replace(array (
					'[',
					']',
					':',
					'<br>'), array (
					'&#91;',
					'&#93;',
					'&#58;',
					"\n"), $matches[2]);
				$matches[1] = strtolower($matches[1]);

				return self::syntax_highlighter($matches[2], $matches[1]);
			},
			/** ToDO: codeblock with a specific language & line selected*/



			// bold
			'#\\[b\\](.*?)\\[/b\\]#uis' => '<b>\\1</b>',
			// italic
			'#\\[i\\](.*?)\\[/i\\]#uis' => '<i>\\1</i>',
			// underlined
			'#\\[u\\](.*?)\\[/u\\]#uis' => '<u>\\1</u>',
			// strikethrough
			'#\\[s\\](.*?)\\[/s\\]#uis' => '<del>\\1</del>',
			// superscript
			'#\\[sup\\](.*?)\\[/sup\\]#uis' => '<sup>\\1</sup>',
			// subscript
			'#\\[sub\\](.*?)\\[/sub\\]#uis' => '<sub>\\1</sub>',
			// aligned left
			'#\\[left\\](.*?)\\[/left\\]#uis' => '<p align="left">\\1</p>',
			// centered
			'#\\[center\\](.*?)\\[/center\\]#uis' => '<p align="center">\\1</p>',
			// aligned right
			'#\\[right\\](.*?)\\[/right\\]#uis' => '<p align="right">\\1</p>',
			// font size
			'#\\[size=([^\\]]*?)\\](.*?)\\[/size\\]#uis' => '<span style="font-size: \\1;">\\2</span>',
			// font color
			'#\\[color=([^\\]]*?)\\](.*?)\\[/color\\]#uis' => '<span style="color: \\1;">\\2</span>',
			// font face
			'#\\[font=([^\\]]*?)\\](.*?)\\[/font\\]#uis' => '<span style="font-family: \\1;">\\2</span>',
			// quote
			'#\\[quote\](.*?)\\[/quote\]#uis' => '<blockquote>\\1</blockquote>',
			// quote with author
			'#\\[quote=([^\\]]*?)\\](.*?)\\[/quote\]#uis' => '<blockquote>\\1 wrote: <br>\\2</blockquote>',
			// quote with author and source
			'#\\[quote=([^\\]]*?),([^\\]]*?)\\](.*?)\\[/quote\]#uis' => '<blockquote cite="\\2">\\1 wrote: <br>\\3</blockquote>',
			// Table
			'#\\[table\](.*?)\\[/table\]#uis' => '<table>\\1</table>',
			// Table row
			'#\\[tr\](.*?)\\[/tr\]#uis' => '<tr>\\1</tr>',
			// Table cell
			'#\\[td\](.*?)\\[/td\]#uis' => '<td>\\1</td>',
			// Table head
			'#\\[th\](.*?)\\[/th\]#uis' => '<th>\\1</th>',
			// unordered list
			'#\\[ul\\](.*?)\[/ul\\]#uis' => '<ul>\\1</ul>',
			'#\\[list\\](.*?)\[/list\\]#uis' => '<ul>\\1</ul>',
			/** ordered list
			 * Types:
			 * 1 - Default, decimal numbers
			 * a - alphabetical, lowercase
			 * A - alphabetical, uppercase
			 * i - roman numbers, lowercase
			 * I - roman numbers, uppercase
			 */
			'#\\[ol\\](.*?)\[/ol\\]#uis' => '<ol>\\1</ol>',
			'#\\[ol=([^\\]]*?)\\](.*?)\[/ol\\]#uis' => '<ol type="\\1">\\2</ol>',
			'#\\[list=([^\\]]*?)\\](.*?)\[/list\\]#uis' => '<ol type="\\1">\\2</ol>',
			//list item
			'#\\[\*\](.*?)\\<br\\>#uis' => '<li>\\1</li>',
			// image
			'#\\[img\\](.*?)\\[/img\\]#uis' => function ($matches) {
				$return = '';
				$url = trim($matches[1]);
				if (self::check_url($url)) {
					$return = '<img src="' . $url . '" alt="user-provided image" class="bbCode_img">'; // ToDo: Update alt="" text
				}

				return $return;
			},
			// link without custom text
			'#\\[url\\](.*?)\\[/url\\]#uis' => function ($matches) {
				$return = '';
				$url = trim($matches[1]);
				if (self::check_url($url)) {
					$return = '<a href="' . $url . '" target="_blank">' . $url . '</a>';
				}

				return $return;
			},
			// link with custom text
			'#\\[url=([^\\]]*?)\\](.*?)\\[/url\\]#uis' => function ($matches) {
				$return = '';
				$url = trim($matches[1]);
				$text = $matches[2];
				if (self::check_url($url)) {
					$return = '<a href="' . $url . '" target="_blank">' . $text . '</a>';
				}

				return $return;
			},
			// media like YouTube, Vimeo and so on
			'#\\[media=([^\\]]*?)\\](.*?)\\[/media\\]#uis' => function ($matches) {
				$return = "";
				if (strtolower($matches[1]) == 'youtube') {
					$return = '<iframe width="560" height="315" src="//www.youtube.com/embed/' . $matches[2] . '?rel=0" frameborder="0" allowfullscreen></iframe>';
				}
				elseif (strtolower($matches[1]) == 'vimeo') {
					$return = '<iframe src="//player.vimeo.com/video/' . $matches[2] . '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="560" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
				}
				elseif (strtolower($matches[1]) == 'twitch') {
					$return = '<object type="application/x-shockwave-flash" width="620" height="378" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=' . $matches[2] . '" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=' . $matches[2] . '&auto_play=true&start_volume=100" /></object>';
				}

				return $return;
			},
			// YouTube
			'#\\[youtube\\](.*?)\\[/youtube\\]#uis' => '<iframe width="560" height="315" src="//www.youtube.com/embed/\\1?rel=0" frameborder="0" allowfullscreen></iframe>'
			/* ToDo: Add the following BBCodes: [flag], [latex], [asciimath], [mathml], [spoiler], [post], [thread], [php], [html]
			// flags
			'#\\[flag\\](.*?)\\[/flag\\]#uis' => '<span class="flag-icon flag-icon-\\1"></span>', Not included yet
			// LaTeX
			'#\\[latex\\](.*?)\\[/latex\\]#uis' => '$$\\1$$', Not included yet
			// LaTeX
			'#\\[asciimath\\](.*?)\\[/asciimath\\]#uis' => '`\\1`', Not included yet
			//MathML
			'#\\[mathml\\](.*?)\\[/mathml\\]#uis' => function ($matches) {
				$matches[1] = str_replace(
					array(
						'&lt;',
						'&gt;'
					),
					array(
						'<',
						'>'
					),
					$matches[1]
				);
				return '<math xmlns="http://www.w3.org/1998/Math/MathML">' . $matches[1] . '</math>';
			}*/);

		// replace non-breaking spaces (caused by contenteditable attribute) with regular spaces
		$result = str_replace("\xc2\xa0", ' ', $string);

		//$result = htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
		foreach ($tags as $pattern => $replacement) {
			if (is_callable($replacement)) {
				$result = preg_replace_callback($pattern, $replacement, $result);
			}
			else {
				$result = preg_replace($pattern, $replacement, $result);
			}
		}

		$result = self::text_to_emoji($result);

		//Mentions ToDo: Wait for user profile then add link here
		//$result = preg_replace('/@(\w+)/', '<a href="' . SITE_URL . '/members.php/cmd/user/id/$1">$1</a>', $result);
		return $result;
	}

	public static function check_url($url)
	{
		$valid_url = false;
		if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED)) {
			$parsed_url = parse_url($url);
			$valid_url = (boolean)preg_match('#\\Ahttps?\\z#ui', $parsed_url['scheme']);
		}

		return $valid_url;
	}

	public static function text_to_emoji($string)
	{
		$return = '';
		$client = new Emojione\Client(new Emojione\Ruleset());
		$client->ascii = true;
		$client->imageType = 'svg';
		if (isset($string)) {
			$return = $client->toImage($string);
		}

		return $return;
	}

	public static function syntax_highlighter($string, $language = "c", $highlight = false)
	{
		$return = "";
		if (isset($string) && $string != "") {
			$string = html_entity_decode($string);
			$geshi = new \GeSHi($string, $language);
			$geshi->set_header_type(GESHI_HEADER_PRE_TABLE);
			$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
			if ($highlight != false) {
				$geshi->highlight_lines_extra(array ($highlight));
			}

			$return = $geshi->parse_code();

		}

		return $return;
	}
}
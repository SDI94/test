{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *}
{extends file="helpers/form/form.tpl"}

{block name="label"}
	{if $input.type == "select_template"}
		<div id="tpl" style="display:{if isset($fields_value.send_email) && $fields_value.send_email}block{else}none{/if}">
	{/if}
	{$smarty.block.parent}
{/block}

{block name="input"}
	{if $input.type == "select_template"}
	<div class="col-lg-9">
		<div class="row">
		{foreach $languages as $language}
			{assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
			<div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
				<div class="col-lg-8">
					<select name="{$input.name}_{$language.id_lang}"
							id="{$input.name}_select_{$language.id_lang}"
							{if isset($input.multiple)}multiple="multiple" {/if}
							{if isset($input.size)}size="{$input.size}"{/if}
							{if isset($input.onchange)}onchange="{$input.onchange}"{/if}>
						{if isset($input.options.query[$language.iso_code]) && $input.options.query[$language.iso_code]}
							{foreach $input.options.query[$language.iso_code] AS $option}
								<option value="{$option[$input.options.id]}"
									{if isset($input.multiple)}
										{foreach $fields_value[$input.name] as $field_value}
											{if $field_value == $option[$input.options.id]}selected="selected"{/if}
										{/foreach}
									{else}
										{if isset($fields_value[$input.name][$language.id_lang]) && ($fields_value[$input.name][$language.id_lang] == $option[$input.options.id])}selected="selected"{/if}
									{/if}
									data-preview="{$option[$input.options.folder]}"
								>{$option[$input.options.name]|escape:'html':'UTF-8'}</option>
							{/foreach}
						{/if}
					</select>
				</div>
				<div class="col-lg-4">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						{$language.iso_code}
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						{foreach from=$languages item=language_flag}
						<li>
							<a href="javascript:hideOtherLanguage({$language_flag.id_lang});" tabindex="-1">{$language_flag.name}</a>
						</li>
						{/foreach}
					</ul>
				</div>
			</div>
		{/foreach}
			{if isset($input.hint)}
			<div class="clearfix">&nbsp;</div>
			<div class="col-lg-9">
				<div class="alert alert-info">
				{if is_array($input.hint)}
					{foreach from=$input.hint item=hint}
						{$hint}<br/>
					{/foreach}
				{else}
					{$input.hint}
				{/if}
				</div>
			</div>
		{/if}
		</div>
	</div>

	{else}
		{$smarty.block.parent}
	{/if}
{/block}

{block name="field"}
	{$smarty.block.parent}
	{if $input.type == "select_template"}
		</div>
	{/if}
{/block}

{block name="script"}
	$(document).ready(function() {
		$('#send_email_on').click(function() {
			$('#tpl').slideToggle();
		});
	});
{/block}

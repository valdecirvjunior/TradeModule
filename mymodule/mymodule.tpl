<!-- Block testModule -->
<!-- @import url({$base_dir}modules/testModule/css/testModule.css); -->
<!--
<div id="testModule_block_left" class="block">
<h4>{l s='testModule Block' mod='testModule'}</h4>
<div class="block_content">
{if $special}
<ul class="products">
    <li class="product_image">
                <a href="{$special.link}"><img title="{$special.name|escape:html:'UTF-8'}" src="{$link->getImageLink($special.link_rewrite, $special.id_image, 'medium')}" alt="{$special.legend|escape:html:'UTF-8'}" width="{$mediumSize.width}" height="{$mediumSize.height}" /></a></li>
    <li>
<h5><a title="{$special.name|escape:html:'UTF-8'}" href="{$special.link}">{$special.name|escape:html:'UTF-8'}</a></h5>
                <span class="price-discount">{if !$priceDisplay}{displayWtPrice p=$special.price_without_reduction}{else}{displayWtPrice p=$priceWithoutReduction_tax_excl}{/if}</span>
                {if $special.reduction_percent}<span class="reduction">(-{$special.reduction_percent}%)</span>{/if}
                <span class="price">{if !$priceDisplay}{displayWtPrice p=$special.price}{else}{displayWtPrice p=$special.price_tax_exc}{/if}</span></li>
</ul>
            <a class="button_large" title="{l s='All specials' mod='testModule'}" href="{$base_dir}prices-drop.php">{l s='All specials' mod='testModule'}</a>
 
{else}
 
{l s='No specials at this time' mod='testModule'}
 
{/if}</div>
</div>

-->
<!-- /Block testModule -->

<div id="testModule_block_left" class="block">Olá Mundo</div>
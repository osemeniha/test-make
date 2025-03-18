<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="press-center__articles press-center__articles--dense-list">
<?$firtsElement = true;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
 	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if ($firstElement):?>
			<article class="news-important" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
			  <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-important__link">
				<h2 class="news-important__title"><?=$arItem["NAME"]?></h2>
			  </a>
			  <time class="news-important__publication-date"><?echo date_format(new DateTime($arItem["DATE_CREATE"]), 'd.m.Y'); ?></time>
			</article>
		<?else:?>
			<article class="news">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news__link">
					<h4 class="news__title"><?=$arItem["NAME"]?></h4>
				</a>
				<div class="news__illustration" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
				<div class="news__publication-info">
					<time class="news__publication-date"><?echo date_format(new DateTime($arItem["DATE_CREATE"]), 'd.m.Y'); ?></time>
				</div>
			</article>
		<?endif;?>
		<?$firstElement = false;?>
	</div>
<?endforeach;?>
</div>

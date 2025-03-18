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
<section class="article">
  <header class="article__header">
    <h1 class="article__title"><?=$arResult["NAME"]?></h1>
    <time class="article__publication-date"><?echo date_format(new DateTime($arItem["DATE_CREATE"]), 'd.m.Y'); ?></time>
    <a class="back-link" href="<?=$arResult["LIST_PAGE_URL"]?>">
      <svg class="icon" role="img">
        <use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow" /></svg>
      <?= GetMessage('RETURN')?>
    </a>
  </header>
 <div class="article__content-wrapper">
    <div class="article__lead content-block">
      <?=$arResult["DETAIL_TEXT"]?>
    </div>
 </div>
<?if(is_array($arResult["DETAIL_PICTURE"])):?>
	<div class="article__content-wrapper">
		<div class="article__content content-block">
		  <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
		  <div class="image-caption">
			<?=$arResult["DETAIL_PICTURE"]["DESCRIPTION"]?>
		  </div>
		</div>
	</div>
<?endif?>
</section>




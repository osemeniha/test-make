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
<?var_dump($arResult);?>
<div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<? $firstElement = true;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if ($firstElemnt):?>
				<article class="news-important" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url(<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>)">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-important__link">
						<h2 class="news-important__title">
							<?echo $arItem["NAME"]?>
						</h2>
					</a>
					<time class="news-important__publication-date" ><?echo $arItem["DATE_CREATE"]?></time>
				</article>
			<?else:?>
				<article class="news news--wide">
				  <div class="news__publication-info">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news__link">
					  <h3 class="news__title content-block">
						<mark>
						 <?echo $arItem["NAME"]?>
						</mark>
						<span>
						  <?echo $arItem["PREVIEW_TEXT"]?>
						</span>
					  </h3>
					</a>
					<time class="news__publication-date" ><?echo $arItem["DATE_CREATE"]?></time>
				  </div>
				  <div class="news__illustration" style="background-image: url(<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
				</article>
			<?endif;?>
		</div>
<?endforeach;?>
</div>

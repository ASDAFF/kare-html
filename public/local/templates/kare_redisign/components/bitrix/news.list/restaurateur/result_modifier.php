<?php
/**
 * @var array $arResult
 * @var array $arParams
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $componentPath
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
	die();
}

if (CModule::IncludeModule('form')) {

	$CForm = new CForm();
	$arForm = $CForm->GetList(
		$by = "s_id",
		$order = "desc",
		[
			'SID' => 'restaurateur'
		],
		$is_filtered
	)->Fetch();
	$arResult['FORM'] = $arForm;

	$component = $this->__component;
	if (is_object($component))
	{
		$component->arResult['FORM'] = $arForm;
		$component->SetResultCacheKeys(['FORM']);
		$arResult['FORM'] = $arForm;
	}
}
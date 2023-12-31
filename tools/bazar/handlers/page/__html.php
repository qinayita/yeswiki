<?php

use YesWiki\Bazar\Service\EntryManager;

if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$entryManager = $this->services->get(EntryManager::class);

if ($entryManager->isEntry($this->GetPageTag())) {
    $this->AddJavascriptFile('tools/bazar/libs/bazar.js');
    $fiche = $entryManager->getOne($this->GetPageTag());
    $this->page["body"] = '""'.baz_voir_fiche(0, $fiche).'""';
}

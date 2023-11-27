<?php

use YesWiki\Core\YesWikiAction;
use YesWiki\Core\Service\PageManager;
use YesWiki\Core\Service\TemplateEngine;

class PinResourceAction extends YesWikiAction
{
    protected $pageManager;
    protected $templateEngine;
    protected $pinnedManager; // Ce service doit être créé pour gérer les ressources épinglées.

    public function formatArguments($arg)
    {
        return [
            'template' => !empty($arg['template']) ? basename($arg['template']) : "",
        ];
    }

    public function run()
    {
        // Initialisation des services
        $this->pageManager = $this->getService(PageManager::class);
        $this->templateEngine = $this->getService(TemplateEngine::class);
        $this->pinnedManager = $this->getService('PinnedManager'); // Ce service doit être défini pour gérer les épinglés.

        // Récupérer l'utilisateur connecté et ses ressources épinglées
        $user = $this->getUser();
        $pinnedResources = empty($user) ? [] : $this->pinnedManager->getUserPinnedResources($user);

        // Sélection du template
        $template = (empty($this->arguments['template']) || !$this->templateEngine->hasTemplate("@core/actions/{$this->arguments['template']}"))
            ? '@core/actions/my-pinned.twig' // Ce template doit être créé pour l'affichage des épinglés.
            : "@core/actions/{$this->arguments['template']}";

        // Préparation des données pour le template
        return $this->render($template, [
            'pinnedResources' => $pinnedResources,
        ]);
    }

    private function getUser()
    {
        // Implémentez la logique pour récupérer l'utilisateur connecté
        // Cette fonction pourrait utiliser AuthController ou un service similaire
    }
}

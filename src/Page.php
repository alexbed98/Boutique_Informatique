<?php

enum Page
{
    case Home;
    case Products;
    case Contact;
    case Connexion;
    public function text(): string
    {
        return match ($this) {
            Page::Home => "Accueil",
            Page::Products => "Produits",
            Page::Contact => "Contact",
            Page::Connexion => "Connexion"
        };
    }
    public function url(): string
    {
        return match ($this) {
            Page::Home => "/",
            Page::Products => "/produits.php",
            Page::Contact => "/contact.php",
            Page::Connexion => "/connexion.php"
        };
    }
}
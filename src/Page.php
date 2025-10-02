<?php

enum Page
{
    case Home;
    case Products;
    case Contact;
    public function text(): string
    {
        return match ($this) {
            Page::Home => "Accueil",
            Page::Products => "Produits",
            Page::Contact => "Contact",
        };
    }
    public function url(): string
    {
        return match ($this) {
            Page::Home => "/",
            Page::Products => "/produits.php",
            Page::Contact => "/contact.php",
        };
    }
}
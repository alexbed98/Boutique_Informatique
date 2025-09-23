<?php

class Html { 
    static function radio(string $radioGroupName, array $inputs, string $legend = '') {

        $html = '';

        // Ajout de la légende ou div extérieur
        if (!empty($legend)) {

            $html .= "<fieldset><legend>$legend</legend>";

        } else {

            $html .= '<div>';

        }
        
        // Ajout des radio
        foreach($inputs as $input) {

            $checked = key_exists('checked', $input) ? 'checked' : '';

            $html .= '<div>';
            $html .= '<input type="radio" id="' . $input['id'] . '" name="' . $radioGroupName . '" value="' . $input['value'] . '" '. $checked . '/>';
            $html .= '<label for="' . $input['id'] . '">' . $input['label'] . '</label>';
            $html .= '</div>';

        }          
        
        // Fermeture de la légende ou div extérieur
        if (!empty($legend)) {

            $html .= "</fieldset>";

        } else {

            $html .= '</div>';

        }

        return $html;

    }

}
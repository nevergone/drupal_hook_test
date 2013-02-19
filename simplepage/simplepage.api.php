<?php

/**
 * @file
 * Simplepage modul által meghívott hook függvények dokumentációja
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * A "module_invoke_all()" függvény teszteléséhez használt hook.
 *
 * @param $text Felhasználó által megadott, változóban eltárolt szöveg
 *
 * @return A hook meghívása után üzenetként megjelenített szöveg.
 */
function hook_simplepage_teszt($text) {
}

/**
 * A "drupal_alter()" függvény teszteléséhez használt hook.
 *
 * @param $text hook_simplepage_teszt() függvényekben megadott szövegek tömbje
 */
function hook_simplepage_teszt_alter(&$text) {
}

/**
 * @} End of "addtogroup hooks".
 */


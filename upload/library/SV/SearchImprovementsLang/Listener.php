<?php

class SV_SearchImprovementsLang_Listener
{
    public static function load_class($class, array &$extend)
    {
        $extend[] = 'SV_SearchImprovementsLang_'.$class;
    }
}
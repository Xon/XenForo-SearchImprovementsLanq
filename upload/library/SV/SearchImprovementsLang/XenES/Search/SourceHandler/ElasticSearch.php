<?php

class SV_SearchImprovementsLang_XenES_Search_SourceHandler_ElasticSearch extends XFCP_SV_SearchImprovementsLang_XenES_Search_SourceHandler_ElasticSearch
{
    public function searchHook($indexName, array &$dsl, $args)
    {
        parent::searchHook($indexName, $dsl, $args);
        // only support ES >= 5 with painless
        if(XenES_Api::version() >= 5 && isset($dsl['query']['function_score']['script_score']['script']))
        {
            $dsl['query']['function_score']['script_score']['script']['lang'] = 'painless';
        }
    }
}
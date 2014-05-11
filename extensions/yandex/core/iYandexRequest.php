<?php
/*
 *
 */
interface iYandexRequest
{
    /**
     * @return array
     */
    public function getHttpHeaders();

    /**
     * @return array
     */
    public function getData();

    /**
     * @return array
     */
    public function getOptions();
}

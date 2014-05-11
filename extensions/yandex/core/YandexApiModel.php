<?php
abstract class YandexApiModel extends CModel
{
    public function toArray()
    {
        $cmap=new CMap($this);
        return $cmap->toArray();
    }
}
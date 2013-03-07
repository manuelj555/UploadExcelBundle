<?php

namespace K2\UploadExcelBundle\Config;

use K2\UploadExcelBundle\Config\ConfigInterface;

abstract class AbstractConfig implements ConfigInterface
{

    protected $excelColumns;
    protected $columnsAssociation;
    protected $filename;

    public function getColumnsAssociation()
    {
        return (array) $this->columnsAssociation;
    }

    public function setColumnsAssociation($columnsAssociation)
    {
        $this->columnsAssociation = $columnsAssociation;
        return $this;
    }

    public function getExcelColumns()
    {
        return (array) $this->excelColumns;
    }

    public function setExcelColumns(array $columns)
    {
        $this->excelColumns = $columns;
        return $this;
    }

    public function getDefaultMatch($column)
    {
        foreach ($this->getExcelColumns() as $index => $name) {
            if (strtoupper($name) === strtoupper($column)) {
                return $index;
            }
        }

        return null;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    public function getHeadersPosition()
    {
        return array('A', 1);//por defecto la columna A y la fila 1
    }

}
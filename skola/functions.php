<?php

namespace ukf;

class Menu
{
    private $sourceFileName = "source/headerMenu.json";

    public function getMenuData(string $type): array
    {
        $menu = [];

        if ($this->validateMenuType($type)) {
            if ($type === "header") {
                try {
                    $menuJsonFile = file_get_contents($this->sourceFileName);
                    $menu = json_decode($menuJsonFile, true);
                    //$menu = fgetcsv(fopen($this->sourceFileName,"r"));




                     //$rows = [];
                    //$handle = fopen($path, "r");
                    //while (($row = fgetcsv($handle)) !== false) {
                      //  $rows[] = $row;
                    //$headers = array_shift($rows);


                } catch (\Exception $exception) {
                    //echo $exception->getMessage();
                }
            }
        }

        return $menu;
    }

    public function printMenu(array $menu)
    {
        foreach ($menu as $menuData ) {
            echo '<li><a href="' . $menuData['path'] . '">' . $menuData['name'] . '</a></li>';



        }

    }

    private function validateMenuType(string $type): bool
    {
        $menuTypes = [
            'header',
            'footer'
        ];

        if (in_array($type, $menuTypes)) {
            return true;
        } else {
            return false;
        }
    }


    public function preparePortfolio(int $numberOfRows = 2, int $numberOfCols = 4): array
    {
        $portfolio = [];
        $colIndex = 1;

        for ($i = 1; $i <= $numberOfRows; $i++) {
            for ($j = 1; $j <= $numberOfCols; $j++) {
                $portfolio[$i][] = $colIndex;
                $colIndex++;
            }
        }

        return $portfolio;
    }
}


?>
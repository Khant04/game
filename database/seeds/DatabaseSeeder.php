<?php

use Illuminate\Database\Seeder;
use App\Bank;
use App\Category;
use App\Stock;
use App\Quantity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("Seeding.xlsx");

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();

        $get_categories = array();
        $get_admjc = array();
        $get_admmc = array();
        $get_admvs = array();
        $get_admpp = array();

        $get_item1 = array();
        $get_item2 = array();
        $get_item3 = array();
        $get_item4 = array();
        $get_item5 = array();
        $get_item6 = array();
        $get_item7 = array();
        $get_item8 = array();
        $get_item9 = array();
        $get_item10 = array();
        $get_item11 = array();
        $get_item12 = array();

        for($row = 1; $row<=$highestRow;$row++){
            $get_admjc[$row] = $worksheet->getCell('A'.$row)->getValue();
            $get_admmc[$row] = $worksheet->getCell('B'.$row)->getValue();
            $get_admvs[$row] = $worksheet->getCell('C'.$row)->getValue();
            $get_admpp[$row] = $worksheet->getCell('D'.$row)->getValue();
            $get_categories[$row] = $worksheet->getCell('O'.$row)->getValue();
            $get_item1[$row] = $worksheet->getCell('P'.$row)->getValue();
            $get_item2[$row] = $worksheet->getCell('Q'.$row)->getValue();
            $get_item3[$row] = $worksheet->getCell('R'.$row)->getValue();
            $get_item4[$row] = $worksheet->getCell('S'.$row)->getValue();
            $get_item5[$row] = $worksheet->getCell('T'.$row)->getValue();
            $get_item6[$row] = $worksheet->getCell('U'.$row)->getValue();
            $get_item7[$row] = $worksheet->getCell('V'.$row)->getValue();
            $get_item8[$row] = $worksheet->getCell('W'.$row)->getValue();
            $get_item9[$row] = $worksheet->getCell('X'.$row)->getValue();
            $get_item10[$row] = $worksheet->getCell('Y'.$row)->getValue();
            $get_item11[$row] = $worksheet->getCell('Z'.$row)->getValue();
            $get_item12[$row] = $worksheet->getCell('AA'.$row)->getValue();
        }

        $banks = array(
            $get_admjc,
            $get_admmc,
            $get_admvs,
            $get_admpp,
        );

        $items = array(
            $get_item1,
            $get_item2,
            $get_item3,
            $get_item4,
            $get_item5,
            $get_item6,
            $get_item7,
            $get_item8,
            $get_item9,
            $get_item10,
            $get_item11,
            $get_item12,
        );

        foreach ($banks as $key => $bank){
            $Bank = new Bank();
            $Bank->cardno = $bank[1];
            $Bank->balance = $bank[2];
            $Bank->cvv = $bank[3];
            $Bank->expdate = $bank[4];
            $Bank->type = $bank[5];
            $Bank->save();
        }
        
        $categories = array_unique($get_categories);

        for ($i=1; $i<=4; $i++){
            $Category = new Category();
            $Category->name = $categories[$i];
            $Category->save();
        }
        
        foreach ($items as $key => $item){
            $Stock = new Stock();
            $Stock->code = $item[1];
            $Stock->name = $item[2];
            $Stock->description = $item[3];
            $Stock->photo = $item[4];
            $Stock->price = $item[5];
            $Stock->category_id = $item[6];
            $Stock->save();
        }
        
        for ($i=1; $i<=12; $i++){
            $Quantity = new Quantity();
            $Quantity->quantity = 100;
            $Quantity->stock_id = $i;
            $Quantity->save();
        }
    }
}

<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPermissionsTableSeeder extends Seeder {
    public function getPermissions(): array
    {
        return [
            //Sale
            ['id' => 1,'name' => 'sales' ,'label' => 'Sales'],
            ['id' => 2,'name' => 'pos_sale' ,'label' => 'POS','parent' => 1],
            ['id' => 3,'name' => 'sale' ,'label' => 'Sale', 'parent' => 1,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 4,'name' => 'customer' ,'label' => 'Special Customer', 'parent' => 1,'read' => 1 ,'write' => 1 ,'delete' => 1],

            //Medicine
            ['id' => 5,'name' => 'medicines' ,'label' => 'Medicines'],
            ['id' => 6,'name' => 'medicine' ,'label' => 'Medicine', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 7,'name' => 'import_stock' ,'label' => 'Import Stock', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 8,'name' => 'medicine_expiry_date' ,'label' => 'Expiry Date', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 0],
            ['id' => 9,'name' => 'measurement' ,'label' => 'Measurement', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 10,'name' => 'category' ,'label' => 'Category', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 11,'name' => 'brand' ,'label' => 'Brand', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 12,'name' => 'medicine_type' ,'label' => 'Medicine Type', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 13,'name' => 'supplier' ,'label' => 'Supplier', 'parent' => 5,'read' => 1 ,'write' => 1 ,'delete' => 1],

            //Petty Cash
            ['id' => 14,'name' => 'petty_cash','label' => 'Petty Cash','read' => 1 ,'write' => 1 ,'delete' => 1],

            //Account
            ['id' => 15,'name' => 'accounts' ,'label' => 'Accounts'],
            ['id' => 16,'name' => 'account_payable' ,'label' => 'Payable', 'parent' => 15,'read' => 1 ,'write' => 1 ,'delete' => 0],
            ['id' => 17,'name' => 'account_receivable' ,'label' => 'Receivable', 'parent' => 15,'read' => 1 ,'write' => 1 ,'delete' => 0],

            //Report
            ['id' => 18,'name' => 'reports' ,'label' => 'Reports'],
            ['id' => 19,'name' => 'sale_report' ,'label' => 'Sale', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 20,'name' => 'sale_hold_report' ,'label' => 'Sale Hold', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 21,'name' => 'stock_report' ,'label' => 'Stock', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 21,'name' => 'stock_batch_report' ,'label' => 'Stock Batch', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 22,'name' => 'import_stock_report' ,'label' => 'Import Stock', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 23,'name' => 'cash_flow_report' ,'label' => 'Cash Flow', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 24,'name' => 'petty_cash_report' ,'label' => 'Petty Cash', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],
            ['id' => 25,'name' => 'medicine_expiry_date_report' ,'label' => 'Expiry Date', 'parent' => 18,'read' => 1 ,'write' => 0 ,'delete' => 0],

            //Security
            ['id' => 26,'name' => 'security' ,'label' => 'Users'],
            ['id' => 27,'name' => 'user' ,'label' => 'User','parent' => 26,'read' => 1 ,'write' => 1 ,'delete' => 1],
            ['id' => 28,'name' => 'role','label' => 'Role','parent' => 26],

            //Settings
            ['id' => 29,'name' => 'setting' ,'label' => 'Settings'],
            ['id' => 30,'name' => 'general','label' => 'General','parent' => 29,'read' => 1 ,'write' => 1 ,'delete' => 0],
            ['id' => 31,'name' => 'branch','label' => 'Branch','parent' => 29,'read' => 1 ,'write' => 1 ,'delete' => 1],
        ];
    }

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run() {
        $permissions = $this->getPermissions();

        foreach ( $permissions as $permission ) {
            DB::table( 'user_permissions' )->insert( [
                'name' => $permission['name'],
                'label' => $permission['label'],
                'read' => isset($permission['read']) ? $permission['read'] : 1,
                'write' => isset($permission['write']) ? $permission['write'] : 1,
                'delete' => isset($permission['delete']) ? $permission['delete'] : 1,
                'parent' => isset($permission['parent']) ? $permission['parent'] : NULL,
            ] );
        }
    }
}

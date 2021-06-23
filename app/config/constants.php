<?php
    define("SALE",!isAr() ? 'Sale' : 'بيع');
    define("RENT",!isAr() ? 'Rent' : 'ايجار');

    define('lands',isAr() ? 'أرض':'Land');
    define('villas',isAr() ? 'فيلا':'Villa');
    define('apartments',isAr() ? 'شقة':'Apartment');
    define('floors',isAr() ? 'دور':'Floor');
    define('Building',isAr() ? 'عمارة':'Building');
    define('esteraha',isAr() ? 'استراحة':'Esteraha');
    define('farms',isAr() ? 'مزرعة':'Farm');
    define('store',isAr() ? 'معرض':'Store');
    define('office',isAr() ? 'مكتب':'Office');
    define('warehouse',isAr() ? 'مستودع':'Warehouse');


    function isAr(){
        return isset($_COOKIE['ln']) && $_COOKIE['ln'] == 'ar';
    }

   
    // die(var_export($_COOKIE['ln']));

    

    abstract class PropertyStatus
    {
        const pending = 0;
        const active = 1;
        const declined = -1;
        
        public function getLabel($status_id)
        {
            return (($status_id == 0) ? 'Pending' : (($status_id == 1) ? 'Active' : 'declined'));
        }
    }

  
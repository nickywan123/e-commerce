<?php

use App\Models\Globals\Cards\Issuer;
use App\Models\Globals\Quality;
use App\Models\Globals\Color;
use App\Models\Globals\Dimension;
use App\Models\Globals\Employment;
use App\Models\Globals\Gender;
use App\Models\Globals\Length;
use App\Models\Globals\Marital;
use App\Models\Globals\PaymentGateway\MerchantID;
use App\Models\Globals\PaymentGateway\Response;
use App\Models\Globals\Race;
use App\Models\Globals\State;
use App\Models\Globals\Status;
use Illuminate\Database\Seeder;

class GlobalTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Employments
         */
        Employment::create([
            'name' => 'self-employed',
            'description' => 'self employed'
        ]);

        Employment::create([
            'name' => 'employed',
            'description' => 'employed'
        ]);

        /**
         * Genders
         */
        Gender::create([
            'name' => 'male',
            'description' => 'male'
        ]);

        Gender::create([
            'name' => 'female',
            'description' => 'female'
        ]);

        /**
         * Maritals
         */
        Marital::create([
            'name' => 'single',
            'description' => 'single'
        ]);

        Marital::create([
            'name' => 'married',
            'description' => 'married'
        ]);

        Marital::create([
            'name' => 'divorce',
            'description' => 'divorce'
        ]);

        /**
         * Races
         */
        Race::create([
            'name' => 'chinese',
            'description' => 'chinese'
        ]);

        Race::create([
            'name' => 'malay',
            'description' => 'malay'
        ]);

        Race::create([
            'name' => 'indian',
            'description' => 'indian'
        ]);

        /**
         * States
         */
        State::create([
            'name' => 'Johor',
            'description' => 'Johor',
            'abbreviation' => 'JHR',
            'iso_code' => 'MY-01',
        ]);

        State::create([
            'name' => 'Kedah',
            'description' => 'Kedah',
            'abbreviation' => 'KDH',
            'iso_code' => 'MY-02',
        ]);

        State::create([
            'name' => 'Kelantan',
            'description' => 'Kelantan',
            'abbreviation' => 'KTN',
            'iso_code' => 'MY-03',
        ]);

        State::create([
            'name' => 'Melaka',
            'description' => 'Melaka',
            'abbreviation' => 'MLK',
            'iso_code' => 'MY-04',
        ]);

        State::create([
            'name' => 'Negeri Sembilan',
            'description' => 'Negeri Sembilan',
            'abbreviation' => 'NSN',
            'iso_code' => 'MY-05',
        ]);

        State::create([
            'name' => 'Pahang',
            'description' => 'Pahang',
            'abbreviation' => 'PHG',
            'iso_code' => 'MY-06',
        ]);

        State::create([
            'name' => 'Penang',
            'description' => 'Penang',
            'abbreviation' => 'PNG',
            'iso_code' => 'MY-07',
        ]);

        State::create([
            'name' => 'Perak',
            'description' => 'Perak',
            'abbreviation' => 'PRK',
            'iso_code' => 'MY-08',
        ]);

        State::create([
            'name' => 'Perlis',
            'description' => 'Perlis',
            'abbreviation' => 'PLS',
            'iso_code' => 'MY-09',
        ]);

        State::create([
            'name' => 'Sabah',
            'description' => 'Sabah',
            'abbreviation' => 'SBH',
            'iso_code' => 'MY-12',
        ]);

        State::create([
            'name' => 'Sarawak',
            'description' => 'Sarawak',
            'abbreviation' => 'SWK',
            'iso_code' => 'MY-13',
        ]);

        State::create([
            'name' => 'Selangor',
            'description' => 'Selangor',
            'abbreviation' => 'SGR',
            'iso_code' => 'MY-10',
        ]);

        State::create([
            'name' => 'Terengganu',
            'description' => 'Terengganu',
            'abbreviation' => 'TRG',
            'iso_code' => 'MY-11',
        ]);

        State::create([
            'name' => 'W.P Kuala Lumpur',
            'description' => 'W.P Kuala Lumpur',
            'abbreviation' => 'KUL',
            'iso_code' => 'MY-14',
        ]);

        State::create([
            'name' => 'W.P Labuan',
            'description' => 'W.P Labuan',
            'abbreviation' => 'LBN',
            'iso_code' => 'MY-15',
        ]);

        State::create([
            'name' => 'W.P Putrajaya',
            'description' => 'W.P Putrajaya',
            'abbreviation' => 'PJY',
            'iso_code' => 'MY-16',
        ]);

        /**
         * Statutes
         */
        Status::create([
            'id' => 1000,
            'name' => 'Record Created',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1001,
            'name' => 'Order Placed',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1002,
            'name' => 'Order Shipped',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 1003,
            'name' => 'Order Delivered',
            'description' => 'Status for order status.'
        ]);

        Status::create([
            'id' => 2001,
            'name' => 'Active',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2002,
            'name' => 'Removed',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 2003,
            'name' => 'Item Checked Out',
            'description' => 'Status for cart item status.'
        ]);

        Status::create([
            'id' => 3000,
            'name' => 'Record Created',
            'description' => 'Status for purchase status.'
        ]);

        Status::create([
            'id' => 3001,
            'name' => 'Payment Made - Card',
            'description' => 'Status for purchase status.'
        ]);

        Status::create([
            'id' => 3002,
            'name' => 'Payment Made - FPX',
            'description' => 'Status for purchase status.'
        ]);

        Status::create([
            'id' => 3003,
            'name' => 'Payment Made - Offline',
            'description' => 'Status for purchase status.'
        ]);

        /**
         * Qualities
         */
        Quality::create([
            'name' => 'Standard',
            'description' => 'Quality for product sold by panels.'
        ]);

        Quality::create([
            'name' => 'Moderate',
            'description' => 'Quality for product sold by panels.'
        ]);

        Quality::create([
            'name' => 'Premium',
            'description' => 'Quality for product sold by panels.'
        ]);

        /**
         * Merchant ID
         */
        MerchantID::create([
            'card_type' => 'mastercard',
            'merchant_id' => 5500003437
        ]);

        MerchantID::create([
            'card_type' => 'visa',
            'merchant_id' => 3300004454
        ]);

        /**
         * Gateway Response
         */
        Response::create([
            'response_code' => 'RJ',
            'description' => 'Rejected - invalid hash value, fraud related, duplicate transaction.'
        ]);

        Response::create([
            'response_code' => 'EP',
            'description' => 'Rejected - invalid input parameter.'
        ]);

        Response::create([
            'response_code' => 'N7',
            'description' => 'Declined - invalid CVV2.'
        ]);

        Response::create([
            'response_code' => '00',
            'description' => 'Approved - transaction accepted'
        ]);

        Response::create([
            'response_code' => '01',
            'description' => 'Declined - refer to card issuer.'
        ]);

        Response::create([
            'response_code' => '02',
            'description' => 'Declined - refer to issuer special.'
        ]);

        Response::create([
            'response_code' => '03',
            'description' => 'Declined - invalid merchant.'
        ]);

        Response::create([
            'response_code' => '04',
            'description' => 'Declined - retain card.'
        ]);

        Response::create([
            'response_code' => '05',
            'description' => 'Declined - do not honor.'
        ]);

        Response::create([
            'response_code' => '06',
            'description' => 'Declined - error.'
        ]);

        Response::create([
            'response_code' => '07',
            'description' => 'Declined- pick up, fraud.'
        ]);

        Response::create([
            'response_code' => '12',
            'description' => 'Declined - invalid'
        ]);

        Response::create([
            'response_code' => '13',
            'description' => 'Declined - invalid amount.'
        ]);

        Response::create([
            'response_code' => '14',
            'description' => 'Declined - no card number found.'
        ]);

        Response::create([
            'response_code' => '15',
            'description' => 'Declined - invalid issuer.'
        ]);

        Response::create([
            'response_code' => '19',
            'description' => 'Declined - system time out.'
        ]);

        Response::create([
            'response_code' => '21',
            'description' => 'Declined - no action taken for refferal.'
        ]);

        Response::create([
            'response_code' => '22',
            'description' => 'Declined - DUKPT error (Derived Unique Key Per Transaction).'
        ]);

        Response::create([
            'response_code' => '30',
            'description' => 'Declined - format error.'
        ]);

        Response::create([
            'response_code' => '34',
            'description' => 'Declined - suspected fraud.'
        ]);

        Response::create([
            'response_code' => '38',
            'description' => 'Declined - number of pin tries exceeded.'
        ]);

        Response::create([
            'response_code' => '41',
            'description' => 'Declined - pickup, lost.'
        ]);

        Response::create([
            'response_code' => '43',
            'description' => 'Declined - pickup, stolen.'
        ]);

        Response::create([
            'response_code' => '51',
            'description' => 'Declined - insufficient funds.'
        ]);

        Response::create([
            'response_code' => '52',
            'description' => 'Declined - damage/upgrade to gold/erc/name.'
        ]);

        Response::create([
            'response_code' => '53',
            'description' => 'Declined - no saving account.'
        ]);

        Response::create([
            'response_code' => '54',
            'description' => 'Declined - card expired.'
        ]);

        Response::create([
            'response_code' => '55',
            'description' => 'Declined - invalid pin.'
        ]);

        Response::create([
            'response_code' => '57',
            'description' => 'Declined - transaction not permitted by issuer.'
        ]);

        Response::create([
            'response_code' => '58',
            'description' => 'Declined - transaction not permitted to acquire/terminal.'
        ]);

        Response::create([
            'response_code' => '61',
            'description' => 'Declined - exceed approval by STIP (Stand-in Processing).'
        ]);

        Response::create([
            'response_code' => '62',
            'description' => 'Declined - restricted card.'
        ]);

        Response::create([
            'response_code' => '63',
            'description' => 'Declined - security violation.'
        ]);

        Response::create([
            'response_code' => '65',
            'description' => 'Declined - exceed withdraw count limit.'
        ]);

        Response::create([
            'response_code' => '75',
            'description' => 'Declined - allowable number of pin tries exceeded.'
        ]);

        Response::create([
            'response_code' => '76',
            'description' => 'Declined - invalid/non-existent to account specified.'
        ]);

        Response::create([
            'response_code' => '77',
            'description' => 'Declined - invalid/non-existent from account specified.'
        ]);

        Response::create([
            'response_code' => '78',
            'description' => 'Declined - invalid/non-existent to account speficied.'
        ]);

        Response::create([
            'response_code' => '82',
            'description' => 'Declined - invalid CVV2.'
        ]);

        Response::create([
            'response_code' => '84',
            'description' => 'Declined - invalid authorization life cycle.'
        ]);

        Response::create([
            'response_code' => '89',
            'description' => 'Declined - invalid terminal.'
        ]);

        Response::create([
            'response_code' => '91',
            'description' => 'Declined - issuer or switch is inoperative.'
        ]);

        Response::create([
            'response_code' => '93',
            'description' => 'Declined - transaction cannot be completed, violation of law.'
        ]);

        Response::create([
            'response_code' => '94',
            'description' => 'Declined - EDC duplicate settlement.'
        ]);

        Response::create([
            'response_code' => '96',
            'description' => 'Declined - system malfunction.'
        ]);

        Response::create([
            'response_code' => '97',
            'description' => 'Declined - encryption error.'
        ]);

        Response::create([
            'response_code' => '98',
            'description' => 'Declined - SW didn\'t get reply from IS.'
        ]);

        Response::create([
            'response_code' => '99',
            'description' => 'Rejected - system error.'
        ]);

        /**
         * Card Issuer
         */
        Issuer::create([
            'issuer_name' => 'visa',
            'description' => 'Visa'
        ]);

        Issuer::create([
            'issuer_name' => 'mastercard',
            'description' => 'Mastercard'
        ]);
    }
}

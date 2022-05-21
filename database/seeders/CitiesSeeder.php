<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\State;



class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate( [
            'ibge'=>'1100015',
            'name'=>'Alta Floresta Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,]);



        City::firstOrCreate( [
            'ibge'=>'1100023',
            'name'=>'Ariquemes',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100031',
            'name'=>'Cabixi',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100049',
            'name'=>'Cacoal',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100056',
            'name'=>'Cerejeiras',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100064',
            'name'=>'Colorado do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100072',
            'name'=>'Corumbiara',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100080',
            'name'=>'Costa Marques',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100098',
            'name'=>'Espigão Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100106',
            'name'=>'Guajará-Mirim',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100114',
            'name'=>'Jaru',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100122',
            'name'=>'Ji-Paraná',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100130',
            'name'=>'Machadinho Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100148',
            'name'=>'Nova Brasilândia Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100155',
            'name'=>'Ouro Preto do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100189',
            'name'=>'Pimenta Bueno',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100205',
            'name'=>'Porto Velho',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100254',
            'name'=>'Presidente Médici',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100262',
            'name'=>'Rio Crespo',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100288',
            'name'=>'Rolim de Moura',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100296',
            'name'=>'Santa Luzia Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100304',
            'name'=>'Vilhena',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100320',
            'name'=>'São Miguel do Guaporé',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100338',
            'name'=>'Nova Mamoré',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100346',
            'name'=>'Alvorada Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100379',
            'name'=>'Alto Alegre dos Parecis',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100403',
            'name'=>'Alto Paraíso',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100452',
            'name'=>'Buritis',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100502',
            'name'=>'Novo Horizonte do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100601',
            'name'=>'Cacaulândia',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100700',
            'name'=>'Campo Novo de Rondônia',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100809',
            'name'=>'Candeias do Jamari',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100908',
            'name'=>'Castanheiras',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100924',
            'name'=>'Chupinguaia',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1100940',
            'name'=>'Cujubim',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101005',
            'name'=>'Governador Jorge Teixeira',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101104',
            'name'=>'Itapuã do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101203',
            'name'=>'Ministro Andreazza',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101302',
            'name'=>'Mirante da Serra',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101401',
            'name'=>'Monte Negro',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101435',
            'name'=>'Nova União',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101450',
            'name'=>'Parecis',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101468',
            'name'=>'Pimenteiras do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101476',
            'name'=>'Primavera de Rondônia',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101484',
            'name'=>'São Felipe Do Oeste',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101492',
            'name'=>'São Francisco do Guaporé',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101500',
            'name'=>'Seringueiras',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101559',
            'name'=>'Teixeirópolis',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101609',
            'name'=>'Theobroma',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101708',
            'name'=>'Urupá',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101757',
            'name'=>'Vale do Anari',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1101807',
            'name'=>'Vale do Paraíso',
            'state_id'=> State::where('uf','RO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200013',
            'name'=>'Acrelândia',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200054',
            'name'=>'Assis Brasil',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200104',
            'name'=>'Brasiléia',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200138',
            'name'=>'Bujari',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200179',
            'name'=>'Capixaba',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200203',
            'name'=>'Cruzeiro do Sul',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200252',
            'name'=>'Epitaciolândia',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200302',
            'name'=>'Feijó',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200328',
            'name'=>'Jordão',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200336',
            'name'=>'Mâncio Lima',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200344',
            'name'=>'Manoel Urbano',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200351',
            'name'=>'Marechal Thaumaturgo',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200385',
            'name'=>'Plácido de Castro',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200393',
            'name'=>'Porto Walter',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200401',
            'name'=>'Rio Branco',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200427',
            'name'=>'Rodrigues Alves',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200435',
            'name'=>'Santa Rosa do Purus',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200450',
            'name'=>'Senador Guiomard',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200500',
            'name'=>'Sena Madureira',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200609',
            'name'=>'Tarauacá',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200708',
            'name'=>'Xapuri',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1200807',
            'name'=>'Porto Acre',
            'state_id'=> State::where('uf','AC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300029',
            'name'=>'Alvarães',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300060',
            'name'=>'Amaturá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300086',
            'name'=>'Anamã',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300102',
            'name'=>'Anori',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300144',
            'name'=>'Apuí',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300201',
            'name'=>'Atalaia do Norte',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300300',
            'name'=>'Autazes',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300409',
            'name'=>'Barcelos',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300508',
            'name'=>'Barreirinha',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300607',
            'name'=>'Benjamin Constant',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300631',
            'name'=>'Beruri',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300680',
            'name'=>'Boa Vista do Ramos',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300706',
            'name'=>'Boca do Acre',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300805',
            'name'=>'Borba',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300839',
            'name'=>'Caapiranga',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1300904',
            'name'=>'Canutama',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301001',
            'name'=>'Carauari',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301100',
            'name'=>'Careiro',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301159',
            'name'=>'Careiro da Várzea',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301209',
            'name'=>'Coari',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301308',
            'name'=>'Codajás',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301407',
            'name'=>'Eirunepé',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301506',
            'name'=>'Envira',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301605',
            'name'=>'Fonte Boa',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301654',
            'name'=>'Guajará',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301704',
            'name'=>'Humaitá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301803',
            'name'=>'Ipixuna',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301852',
            'name'=>'Iranduba',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301902',
            'name'=>'Itacoatiara',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1301951',
            'name'=>'Itamarati',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302009',
            'name'=>'Itapiranga',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302108',
            'name'=>'Japurá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302207',
            'name'=>'Juruá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302306',
            'name'=>'Jutaí',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302405',
            'name'=>'Lábrea',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302504',
            'name'=>'Manacapuru',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302553',
            'name'=>'Manaquiri',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302603',
            'name'=>'Manaus',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302702',
            'name'=>'Manicoré',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302801',
            'name'=>'Maraã',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1302900',
            'name'=>'Maués',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303007',
            'name'=>'Nhamundá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303106',
            'name'=>'Nova Olinda do Norte',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303205',
            'name'=>'Novo Airão',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303304',
            'name'=>'Novo Aripuanã',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303403',
            'name'=>'Parintins',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303502',
            'name'=>'Pauini',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303536',
            'name'=>'Presidente Figueiredo',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303569',
            'name'=>'Rio Preto da Eva',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303601',
            'name'=>'Santa Isabel do Rio Negro',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303700',
            'name'=>'Santo Antônio do Içá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303809',
            'name'=>'São Gabriel da Cachoeira',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303908',
            'name'=>'São Paulo de Olivença',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1303957',
            'name'=>'São Sebastião do Uatumã',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304005',
            'name'=>'Silves',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304062',
            'name'=>'Tabatinga',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304104',
            'name'=>'Tapauá',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304203',
            'name'=>'Tefé',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304237',
            'name'=>'Tonantins',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304260',
            'name'=>'Uarini',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304302',
            'name'=>'Urucará',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1304401',
            'name'=>'Urucurituba',
            'state_id'=> State::where('uf','AM')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400027',
            'name'=>'Amajari',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400050',
            'name'=>'Alto Alegre',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400100',
            'name'=>'Boa Vista',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400159',
            'name'=>'Bonfim',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400175',
            'name'=>'Cantá',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400209',
            'name'=>'Caracaraí',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400233',
            'name'=>'Caroebe',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400282',
            'name'=>'Iracema',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400308',
            'name'=>'Mucajaí',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400407',
            'name'=>'Normandia',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400456',
            'name'=>'Pacaraima',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400472',
            'name'=>'Rorainópolis',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400506',
            'name'=>'São João da Baliza',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400605',
            'name'=>'São Luiz',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1400704',
            'name'=>'Uiramutã',
            'state_id'=> State::where('uf','RR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500107',
            'name'=>'Abaetetuba',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500131',
            'name'=>'Abel Figueiredo',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500206',
            'name'=>'Acará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500305',
            'name'=>'Afuá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500347',
            'name'=>'Água Azul do Norte',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500404',
            'name'=>'Alenquer',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500503',
            'name'=>'Almeirim',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500602',
            'name'=>'Altamira',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500701',
            'name'=>'Anajás',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500800',
            'name'=>'Ananindeua',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500859',
            'name'=>'Anapu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500909',
            'name'=>'Augusto Corrêa',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1500958',
            'name'=>'Aurora do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501006',
            'name'=>'Aveiro',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501105',
            'name'=>'Bagre',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501204',
            'name'=>'Baião',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501253',
            'name'=>'Bannach',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501303',
            'name'=>'Barcarena',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501402',
            'name'=>'Belém',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501451',
            'name'=>'Belterra',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501501',
            'name'=>'Benevides',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501576',
            'name'=>'Bom Jesus do Tocantins',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501600',
            'name'=>'Bonito',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501709',
            'name'=>'Bragança',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501725',
            'name'=>'Brasil Novo',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501758',
            'name'=>'Brejo Grande do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501782',
            'name'=>'Breu Branco',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501808',
            'name'=>'Breves',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501907',
            'name'=>'Bujaru',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1501956',
            'name'=>'Cachoeira do Piriá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502004',
            'name'=>'Cachoeira do Arari',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502103',
            'name'=>'Cametá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502152',
            'name'=>'Canaã dos Carajás',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502202',
            'name'=>'Capanema',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502301',
            'name'=>'Capitão Poço',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502400',
            'name'=>'Castanhal',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502509',
            'name'=>'Chaves',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502608',
            'name'=>'Colares',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502707',
            'name'=>'Conceição do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502756',
            'name'=>'Concórdia do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502764',
            'name'=>'Cumaru do Norte',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502772',
            'name'=>'Curionópolis',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502806',
            'name'=>'Curralinho',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502855',
            'name'=>'Curuá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502905',
            'name'=>'Curuçá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502939',
            'name'=>'Dom Eliseu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1502954',
            'name'=>'Eldorado dos Carajás',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503002',
            'name'=>'Faro',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503044',
            'name'=>'Floresta do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503077',
            'name'=>'Garrafão do Norte',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503093',
            'name'=>'Goianésia do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503101',
            'name'=>'Gurupá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503200',
            'name'=>'Igarapé-Açu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503309',
            'name'=>'Igarapé-Miri',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503408',
            'name'=>'Inhangapi',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503457',
            'name'=>'Ipixuna do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503507',
            'name'=>'Irituia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503606',
            'name'=>'Itaituba',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503705',
            'name'=>'Itupiranga',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503754',
            'name'=>'Jacareacanga',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503804',
            'name'=>'Jacundá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1503903',
            'name'=>'Juruti',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504000',
            'name'=>'Limoeiro do Ajuru',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504059',
            'name'=>'Mãe do Rio',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504109',
            'name'=>'Magalhães Barata',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504208',
            'name'=>'Marabá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504307',
            'name'=>'Maracanã',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504406',
            'name'=>'Marapanim',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504422',
            'name'=>'Marituba',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504455',
            'name'=>'Medicilândia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504505',
            'name'=>'Melgaço',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504604',
            'name'=>'Mocajuba',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504703',
            'name'=>'Moju',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504752',
            'name'=>'Mojuí dos Campos',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504802',
            'name'=>'Monte Alegre',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504901',
            'name'=>'Muaná',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504950',
            'name'=>'Nova Esperança do Piriá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1504976',
            'name'=>'Nova Ipixuna',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505007',
            'name'=>'Nova Timboteua',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505031',
            'name'=>'Novo Progresso',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505064',
            'name'=>'Novo Repartimento',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505106',
            'name'=>'Óbidos',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505205',
            'name'=>'Oeiras do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505304',
            'name'=>'Oriximiná',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505403',
            'name'=>'Ourém',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505437',
            'name'=>'Ourilândia do Norte',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505486',
            'name'=>'Pacajá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505494',
            'name'=>'Palestina do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505502',
            'name'=>'Paragominas',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505536',
            'name'=>'Parauapebas',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505551',
            'name'=>'Pau D Arco',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505601',
            'name'=>'Peixe-Boi',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505635',
            'name'=>'Piçarra',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505650',
            'name'=>'Placas',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505700',
            'name'=>'Ponta de Pedras',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505809',
            'name'=>'Portel',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1505908',
            'name'=>'Porto de Moz',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506005',
            'name'=>'Prainha',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506104',
            'name'=>'Primavera',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506112',
            'name'=>'Quatipuru',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506138',
            'name'=>'Redenção',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506161',
            'name'=>'Rio Maria',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506187',
            'name'=>'Rondon do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506195',
            'name'=>'Rurópolis',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506203',
            'name'=>'Salinópolis',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506302',
            'name'=>'Salvaterra',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506351',
            'name'=>'Santa Bárbara do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506401',
            'name'=>'Santa Cruz do Arari',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506500',
            'name'=>'Santa Isabel do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506559',
            'name'=>'Santa Luzia do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506583',
            'name'=>'Santa Maria das Barreiras',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506609',
            'name'=>'Santa Maria do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506708',
            'name'=>'Santana do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506807',
            'name'=>'Santarém',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1506906',
            'name'=>'Santarém Novo',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507003',
            'name'=>'Santo Antônio do Tauá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507102',
            'name'=>'São Caetano de Odivelas',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507151',
            'name'=>'São Domingos do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507201',
            'name'=>'São Domingos do Capim',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507300',
            'name'=>'São Félix do Xingu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507409',
            'name'=>'São Francisco do Pará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507458',
            'name'=>'São Geraldo do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507466',
            'name'=>'São João da Ponta',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507474',
            'name'=>'São João de Pirabas',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507508',
            'name'=>'São João do Araguaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507607',
            'name'=>'São Miguel do Guamá',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507706',
            'name'=>'São Sebastião da Boa Vista',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507755',
            'name'=>'Sapucaia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507805',
            'name'=>'Senador José Porfírio',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507904',
            'name'=>'Soure',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507953',
            'name'=>'Tailândia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507961',
            'name'=>'Terra Alta',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1507979',
            'name'=>'Terra Santa',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508001',
            'name'=>'Tomé-Açu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508035',
            'name'=>'Tracuateua',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508050',
            'name'=>'Trairão',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508084',
            'name'=>'Tucumã',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508100',
            'name'=>'Tucuruí',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508126',
            'name'=>'Ulianópolis',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508159',
            'name'=>'Uruará',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508209',
            'name'=>'Vigia',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508308',
            'name'=>'Viseu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508357',
            'name'=>'Vitória do Xingu',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1508407',
            'name'=>'Xinguara',
            'state_id'=> State::where('uf','PA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600055',
            'name'=>'Serra do Navio',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600105',
            'name'=>'Amapá',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600154',
            'name'=>'Pedra Branca do Amapari',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600204',
            'name'=>'Calçoene',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600212',
            'name'=>'Cutias',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600238',
            'name'=>'Ferreira Gomes',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600253',
            'name'=>'Itaubal',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600279',
            'name'=>'Laranjal do Jari',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600303',
            'name'=>'Macapá',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600402',
            'name'=>'Mazagão',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600501',
            'name'=>'Oiapoque',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600535',
            'name'=>'Porto Grande',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600550',
            'name'=>'Pracuúba',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600600',
            'name'=>'Santana',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600709',
            'name'=>'Tartarugalzinho',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1600808',
            'name'=>'Vitória do Jari',
            'state_id'=> State::where('uf','AP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1700251',
            'name'=>'Abreulândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1700301',
            'name'=>'Aguiarnópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1700350',
            'name'=>'Aliança do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1700400',
            'name'=>'Almas',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1700707',
            'name'=>'Alvorada',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1701002',
            'name'=>'Ananás',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1701051',
            'name'=>'Angico',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1701101',
            'name'=>'Aparecida do Rio Negro',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1701309',
            'name'=>'Aragominas',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1701903',
            'name'=>'Araguacema',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702000',
            'name'=>'Araguaçu',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702109',
            'name'=>'Araguaína',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702158',
            'name'=>'Araguanã',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702208',
            'name'=>'Araguatins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702307',
            'name'=>'Arapoema',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702406',
            'name'=>'Arraias',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702554',
            'name'=>'Augustinópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702703',
            'name'=>'Aurora do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1702901',
            'name'=>'Axixá do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703008',
            'name'=>'Babaçulândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703057',
            'name'=>'Bandeirantes do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703073',
            'name'=>'Barra do Ouro',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703107',
            'name'=>'Barrolândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703206',
            'name'=>'Bernardo Sayão',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703305',
            'name'=>'Bom Jesus do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703602',
            'name'=>'Brasilândia do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703701',
            'name'=>'Brejinho de Nazaré',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703800',
            'name'=>'Buriti do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703826',
            'name'=>'Cachoeirinha',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703842',
            'name'=>'Campos Lindos',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703867',
            'name'=>'Cariri do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703883',
            'name'=>'Carmolândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703891',
            'name'=>'Carrasco Bonito',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1703909',
            'name'=>'Caseara',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1704105',
            'name'=>'Centenário',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1704600',
            'name'=>'Chapada de Areia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1705102',
            'name'=>'Chapada da Natividade',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1705508',
            'name'=>'Colinas do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1705557',
            'name'=>'Combinado',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1705607',
            'name'=>'Conceição do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1706001',
            'name'=>'Couto Magalhães',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1706100',
            'name'=>'Cristalândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1706258',
            'name'=>'Crixás do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1706506',
            'name'=>'Darcinópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707009',
            'name'=>'Dianópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707108',
            'name'=>'Divinópolis do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707207',
            'name'=>'Dois Irmãos do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707306',
            'name'=>'Dueré',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707405',
            'name'=>'Esperantina',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707553',
            'name'=>'Fátima',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707652',
            'name'=>'Figueirópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1707702',
            'name'=>'Filadélfia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1708205',
            'name'=>'Formoso do Araguaia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1708254',
            'name'=>'Fortaleza do Tabocão',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1708304',
            'name'=>'Goianorte',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1709005',
            'name'=>'Goiatins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1709302',
            'name'=>'Guaraí',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1709500',
            'name'=>'Gurupi',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1709807',
            'name'=>'Ipueiras',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1710508',
            'name'=>'Itacajá',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1710706',
            'name'=>'Itaguatins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1710904',
            'name'=>'Itapiratins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1711100',
            'name'=>'Itaporã do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1711506',
            'name'=>'Jaú do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1711803',
            'name'=>'Juarina',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1711902',
            'name'=>'Lagoa da Confusão',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1711951',
            'name'=>'Lagoa do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712009',
            'name'=>'Lajeado',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712157',
            'name'=>'Lavandeira',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712405',
            'name'=>'Lizarda',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712454',
            'name'=>'Luzinópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712504',
            'name'=>'Marianópolis do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712702',
            'name'=>'Mateiros',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1712801',
            'name'=>'Maurilândia do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713205',
            'name'=>'Miracema do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713304',
            'name'=>'Miranorte',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713601',
            'name'=>'Monte do Carmo',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713700',
            'name'=>'Monte Santo do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713809',
            'name'=>'Palmeiras do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1713957',
            'name'=>'Muricilândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1714203',
            'name'=>'Natividade',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1714302',
            'name'=>'Nazaré',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1714880',
            'name'=>'Nova Olinda',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715002',
            'name'=>'Nova Rosalândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715101',
            'name'=>'Novo Acordo',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715150',
            'name'=>'Novo Alegre',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715259',
            'name'=>'Novo Jardim',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715507',
            'name'=>'Oliveira de Fátima',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715705',
            'name'=>'Palmeirante',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1715754',
            'name'=>'Palmeirópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716109',
            'name'=>'Paraíso do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716208',
            'name'=>'Paranã',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716307',
            'name'=>'Pau D Arco',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716505',
            'name'=>'Pedro Afonso',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716604',
            'name'=>'Peixe',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716653',
            'name'=>'Pequizeiro',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1716703',
            'name'=>'Colméia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1717008',
            'name'=>'Pindorama do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1717206',
            'name'=>'Piraquê',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1717503',
            'name'=>'Pium',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1717800',
            'name'=>'Ponte Alta do Bom Jesus',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1717909',
            'name'=>'Ponte Alta do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718006',
            'name'=>'Porto Alegre do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718204',
            'name'=>'Porto Nacional',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718303',
            'name'=>'Praia Norte',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718402',
            'name'=>'Presidente Kennedy',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718451',
            'name'=>'Pugmil',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718501',
            'name'=>'Recursolândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718550',
            'name'=>'Riachinho',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718659',
            'name'=>'Rio da Conceição',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718709',
            'name'=>'Rio dos Bois',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718758',
            'name'=>'Rio Sono',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718808',
            'name'=>'Sampaio',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718840',
            'name'=>'Sandolândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718865',
            'name'=>'Santa Fé do Araguaia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718881',
            'name'=>'Santa Maria do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718899',
            'name'=>'Santa Rita do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1718907',
            'name'=>'Santa Rosa do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1719004',
            'name'=>'Santa Tereza do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720002',
            'name'=>'Santa Terezinha do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720101',
            'name'=>'São Bento do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720150',
            'name'=>'São Félix do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720200',
            'name'=>'São Miguel do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720259',
            'name'=>'São Salvador do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720309',
            'name'=>'São Sebastião do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720499',
            'name'=>'São Valério',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720655',
            'name'=>'Silvanópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720804',
            'name'=>'Sítio Novo do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720853',
            'name'=>'Sucupira',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720903',
            'name'=>'Taguatinga',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720937',
            'name'=>'Taipas do Tocantins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1720978',
            'name'=>'Talismã',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1721000',
            'name'=>'Palmas',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1721109',
            'name'=>'Tocantínia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1721208',
            'name'=>'Tocantinópolis',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1721257',
            'name'=>'Tupirama',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1721307',
            'name'=>'Tupiratins',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1722081',
            'name'=>'Wanderlândia',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'1722107',
            'name'=>'Xambioá',
            'state_id'=> State::where('uf','TO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100055',
            'name'=>'Açailândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100105',
            'name'=>'Afonso Cunha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100154',
            'name'=>'Água Doce do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100204',
            'name'=>'Alcântara',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100303',
            'name'=>'Aldeias Altas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100402',
            'name'=>'Altamira do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100436',
            'name'=>'Alto Alegre do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100477',
            'name'=>'Alto Alegre do Pindaré',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100501',
            'name'=>'Alto Parnaíba',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100550',
            'name'=>'Amapá do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100600',
            'name'=>'Amarante do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100709',
            'name'=>'Anajatuba',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100808',
            'name'=>'Anapurus',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100832',
            'name'=>'Apicum-Açu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100873',
            'name'=>'Araguanã',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100907',
            'name'=>'Araioses',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2100956',
            'name'=>'Arame',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101004',
            'name'=>'Arari',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101103',
            'name'=>'Axixá',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101202',
            'name'=>'Bacabal',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101251',
            'name'=>'Bacabeira',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101301',
            'name'=>'Bacuri',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101350',
            'name'=>'Bacurituba',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101400',
            'name'=>'Balsas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101509',
            'name'=>'Barão de Grajaú',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101608',
            'name'=>'Barra do Corda',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101707',
            'name'=>'Barreirinhas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101731',
            'name'=>'Belágua',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101772',
            'name'=>'Bela Vista do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101806',
            'name'=>'Benedito Leite',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101905',
            'name'=>'Bequimão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101939',
            'name'=>'Bernardo do Mearim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2101970',
            'name'=>'Boa Vista do Gurupi',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102002',
            'name'=>'Bom Jardim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102036',
            'name'=>'Bom Jesus das Selvas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102077',
            'name'=>'Bom Lugar',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102101',
            'name'=>'Brejo',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102150',
            'name'=>'Brejo de Areia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102200',
            'name'=>'Buriti',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102309',
            'name'=>'Buriti Bravo',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102325',
            'name'=>'Buriticupu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102358',
            'name'=>'Buritirana',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102374',
            'name'=>'Cachoeira Grande',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102408',
            'name'=>'Cajapió',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102507',
            'name'=>'Cajari',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102556',
            'name'=>'Campestre do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102606',
            'name'=>'Cândido Mendes',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102705',
            'name'=>'Cantanhede',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102754',
            'name'=>'Capinzal do Norte',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );

        City::firstOrCreate( [
            'ibge'=>'2102804',
            'name'=>'Carolina',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2102903',
            'name'=>'Carutapera',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103000',
            'name'=>'Caxias',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103109',
            'name'=>'Cedral',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103125',
            'name'=>'Central do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103158',
            'name'=>'Centro do Guilherme',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103174',
            'name'=>'Centro Novo do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103208',
            'name'=>'Chapadinha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103257',
            'name'=>'Cidelândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103307',
            'name'=>'Codó',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103406',
            'name'=>'Coelho Neto',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103505',
            'name'=>'Colinas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103554',
            'name'=>'Conceição do Lago-Açu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103604',
            'name'=>'Coroatá',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103703',
            'name'=>'Cururupu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103752',
            'name'=>'Davinópolis',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103802',
            'name'=>'Dom Pedro',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2103901',
            'name'=>'Duque Bacelar',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104008',
            'name'=>'Esperantinópolis',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104057',
            'name'=>'Estreito',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104073',
            'name'=>'Feira Nova do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104081',
            'name'=>'Fernando Falcão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104099',
            'name'=>'Formosa da Serra Negra',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104107',
            'name'=>'Fortaleza dos Nogueiras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104206',
            'name'=>'Fortuna',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104305',
            'name'=>'Godofredo Viana',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104404',
            'name'=>'Gonçalves Dias',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104503',
            'name'=>'Governador Archer',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104552',
            'name'=>'Governador Edison Lobão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104602',
            'name'=>'Governador Eugênio Barros',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104628',
            'name'=>'Governador Luiz Rocha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104651',
            'name'=>'Governador Newton Bello',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104677',
            'name'=>'Governador Nunes Freire',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104701',
            'name'=>'Graça Aranha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104800',
            'name'=>'Grajaú',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2104909',
            'name'=>'Guimarães',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105005',
            'name'=>'Humberto de Campos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105104',
            'name'=>'Icatu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105153',
            'name'=>'Igarapé do Meio',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105203',
            'name'=>'Igarapé Grande',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105302',
            'name'=>'Imperatriz',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105351',
            'name'=>'Itaipava do Grajaú',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105401',
            'name'=>'Itapecuru Mirim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105427',
            'name'=>'Itinga do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105450',
            'name'=>'Jatobá',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105476',
            'name'=>'Jenipapo dos Vieiras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105500',
            'name'=>'João Lisboa',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105609',
            'name'=>'Joselândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105658',
            'name'=>'Junco do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105708',
            'name'=>'Lago da Pedra',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105807',
            'name'=>'Lago do Junco',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105906',
            'name'=>'Lago Verde',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105922',
            'name'=>'Lagoa do Mato',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105948',
            'name'=>'Lago dos Rodrigues',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105963',
            'name'=>'Lagoa Grande do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2105989',
            'name'=>'Lajeado Novo',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106003',
            'name'=>'Lima Campos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106102',
            'name'=>'Loreto',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106201',
            'name'=>'Luís Domingues',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106300',
            'name'=>'Magalhães de Almeida',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106326',
            'name'=>'Maracaçumé',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106359',
            'name'=>'Marajá do Sena',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106375',
            'name'=>'Maranhãozinho',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106409',
            'name'=>'Mata Roma',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106508',
            'name'=>'Matinha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106607',
            'name'=>'Matões',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106631',
            'name'=>'Matões do Norte',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106672',
            'name'=>'Milagres do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106706',
            'name'=>'Mirador',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106755',
            'name'=>'Miranda do Norte',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106805',
            'name'=>'Mirinzal',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2106904',
            'name'=>'Monção',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107001',
            'name'=>'Montes Altos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107100',
            'name'=>'Morros',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107209',
            'name'=>'Nina Rodrigues',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107258',
            'name'=>'Nova Colinas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107308',
            'name'=>'Nova Iorque',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107357',
            'name'=>'Nova Olinda do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107407',
            'name'=>'Olho D Água das Cunhãs',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107456',
            'name'=>'Olinda Nova do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107506',
            'name'=>'Paço do Lumiar',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107605',
            'name'=>'Palmeirândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107704',
            'name'=>'Paraibano',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107803',
            'name'=>'Parnarama',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2107902',
            'name'=>'Passagem Franca',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108009',
            'name'=>'Pastos Bons',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108058',
            'name'=>'Paulino Neves',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108108',
            'name'=>'Paulo Ramos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108207',
            'name'=>'Pedreiras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108256',
            'name'=>'Pedro do Rosário',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108306',
            'name'=>'Penalva',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108405',
            'name'=>'Peri Mirim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108454',
            'name'=>'Peritoró',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108504',
            'name'=>'Pindaré-Mirim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108603',
            'name'=>'Pinheiro',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108702',
            'name'=>'Pio XII',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108801',
            'name'=>'Pirapemas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2108900',
            'name'=>'Poção de Pedras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109007',
            'name'=>'Porto Franco',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109056',
            'name'=>'Porto Rico do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109106',
            'name'=>'Presidente Dutra',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109205',
            'name'=>'Presidente Juscelino',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109239',
            'name'=>'Presidente Médici',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109270',
            'name'=>'Presidente Sarney',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109304',
            'name'=>'Presidente Vargas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109403',
            'name'=>'Primeira Cruz',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109452',
            'name'=>'Raposa',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109502',
            'name'=>'Riachão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109551',
            'name'=>'Ribamar Fiquene',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109601',
            'name'=>'Rosário',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109700',
            'name'=>'Sambaíba',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109759',
            'name'=>'Santa Filomena do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109809',
            'name'=>'Santa Helena',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2109908',
            'name'=>'Santa Inês',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110005',
            'name'=>'Santa Luzia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110039',
            'name'=>'Santa Luzia do Paruá',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110104',
            'name'=>'Santa Quitéria do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110203',
            'name'=>'Santa Rita',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110237',
            'name'=>'Santana do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110278',
            'name'=>'Santo Amaro do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110302',
            'name'=>'Santo Antônio dos Lopes',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110401',
            'name'=>'São Benedito do Rio Preto',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110500',
            'name'=>'São Bento',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110609',
            'name'=>'São Bernardo',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110658',
            'name'=>'São Domingos do Azeitão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110708',
            'name'=>'São Domingos do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110807',
            'name'=>'São Félix de Balsas',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110856',
            'name'=>'São Francisco do Brejão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2110906',
            'name'=>'São Francisco do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111003',
            'name'=>'São João Batista',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111029',
            'name'=>'São João do Carú',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111052',
            'name'=>'São João do Paraíso',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111078',
            'name'=>'São João do Soter',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111102',
            'name'=>'São João dos Patos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111201',
            'name'=>'São José de Ribamar',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111250',
            'name'=>'São José dos Basílios',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111300',
            'name'=>'São Luís',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111409',
            'name'=>'São Luís Gonzaga do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111508',
            'name'=>'São Mateus do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111532',
            'name'=>'São Pedro da Água Branca',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111573',
            'name'=>'São Pedro dos Crentes',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111607',
            'name'=>'São Raimundo das Mangabeiras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111631',
            'name'=>'São Raimundo do Doca Bezerra',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111672',
            'name'=>'São Roberto',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111706',
            'name'=>'São Vicente Ferrer',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111722',
            'name'=>'Satubinha',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111748',
            'name'=>'Senador Alexandre Costa',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111763',
            'name'=>'Senador La Rocque',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111789',
            'name'=>'Serrano do Maranhão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111805',
            'name'=>'Sítio Novo',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111904',
            'name'=>'Sucupira do Norte',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2111953',
            'name'=>'Sucupira do Riachão',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112001',
            'name'=>'Tasso Fragoso',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112100',
            'name'=>'Timbiras',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112209',
            'name'=>'Timon',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112233',
            'name'=>'Trizidela do Vale',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112274',
            'name'=>'Tufilândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112308',
            'name'=>'Tuntum',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112407',
            'name'=>'Turiaçu',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112456',
            'name'=>'Turilândia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112506',
            'name'=>'Tutóia',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112605',
            'name'=>'Urbano Santos',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112704',
            'name'=>'Vargem Grande',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112803',
            'name'=>'Viana',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112852',
            'name'=>'Vila Nova dos Martírios',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2112902',
            'name'=>'Vitória do Mearim',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2113009',
            'name'=>'Vitorino Freire',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2114007',
            'name'=>'Zé Doca',
            'state_id'=> State::where('uf','MA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200053',
            'name'=>'Acauã',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200103',
            'name'=>'Agricolândia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200202',
            'name'=>'Água Branca',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200251',
            'name'=>'Alagoinha do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200277',
            'name'=>'Alegrete do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200301',
            'name'=>'Alto Longá',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200400',
            'name'=>'Altos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200459',
            'name'=>'Alvorada do Gurguéia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200509',
            'name'=>'Amarante',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200608',
            'name'=>'Angical do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200707',
            'name'=>'Anísio de Abreu',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200806',
            'name'=>'Antônio Almeida',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200905',
            'name'=>'Aroazes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2200954',
            'name'=>'Aroeiras do Itaim',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201002',
            'name'=>'Arraial',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201051',
            'name'=>'Assunção do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201101',
            'name'=>'Avelino Lopes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201150',
            'name'=>'Baixa Grande do Ribeiro',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201176',
            'name'=>'Barra D Alcântara',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201200',
            'name'=>'Barras',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201309',
            'name'=>'Barreiras do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201408',
            'name'=>'Barro Duro',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201507',
            'name'=>'Batalha',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201556',
            'name'=>'Bela Vista do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201572',
            'name'=>'Belém do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201606',
            'name'=>'Beneditinos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201705',
            'name'=>'Bertolínia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201739',
            'name'=>'Betânia do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201770',
            'name'=>'Boa Hora',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201804',
            'name'=>'Bocaina',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201903',
            'name'=>'Bom Jesus',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201919',
            'name'=>'Bom Princípio do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201929',
            'name'=>'Bonfim do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201945',
            'name'=>'Boqueirão do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201960',
            'name'=>'Brasileira',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2201988',
            'name'=>'Brejo do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202000',
            'name'=>'Buriti dos Lopes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202026',
            'name'=>'Buriti dos Montes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202059',
            'name'=>'Cabeceiras do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202075',
            'name'=>'Cajazeiras do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202083',
            'name'=>'Cajueiro da Praia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202091',
            'name'=>'Caldeirão Grande do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202109',
            'name'=>'Campinas do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202117',
            'name'=>'Campo Alegre do Fidalgo',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202133',
            'name'=>'Campo Grande do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202174',
            'name'=>'Campo Largo do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202208',
            'name'=>'Campo Maior',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202251',
            'name'=>'Canavieira',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202307',
            'name'=>'Canto do Buriti',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202406',
            'name'=>'Capitão de Campos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202455',
            'name'=>'Capitão Gervásio Oliveira',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202505',
            'name'=>'Caracol',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202539',
            'name'=>'Caraúbas do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202554',
            'name'=>'Caridade do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202604',
            'name'=>'Castelo do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202653',
            'name'=>'Caxingó',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202703',
            'name'=>'Cocal',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202711',
            'name'=>'Cocal de Telha',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202729',
            'name'=>'Cocal dos Alves',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202737',
            'name'=>'Coivaras',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202752',
            'name'=>'Colônia do Gurguéia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202778',
            'name'=>'Colônia do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202802',
            'name'=>'Conceição do Canindé',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202851',
            'name'=>'Coronel José Dias',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2202901',
            'name'=>'Corrente',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203008',
            'name'=>'Cristalândia do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203107',
            'name'=>'Cristino Castro',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203206',
            'name'=>'Curimatá',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203230',
            'name'=>'Currais',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203255',
            'name'=>'Curralinhos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203271',
            'name'=>'Curral Novo do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203305',
            'name'=>'Demerval Lobão',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203354',
            'name'=>'Dirceu Arcoverde',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203404',
            'name'=>'Dom Expedito Lopes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203420',
            'name'=>'Domingos Mourão',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203453',
            'name'=>'Dom Inocêncio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203503',
            'name'=>'Elesbão Veloso',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203602',
            'name'=>'Eliseu Martins',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203701',
            'name'=>'Esperantina',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203750',
            'name'=>'Fartura do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203800',
            'name'=>'Flores do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203859',
            'name'=>'Floresta do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2203909',
            'name'=>'Floriano',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204006',
            'name'=>'Francinópolis',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204105',
            'name'=>'Francisco Ayres',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204154',
            'name'=>'Francisco Macedo',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204204',
            'name'=>'Francisco Santos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204303',
            'name'=>'Fronteiras',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204352',
            'name'=>'Geminiano',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204402',
            'name'=>'Gilbués',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204501',
            'name'=>'Guadalupe',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204550',
            'name'=>'Guaribas',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204600',
            'name'=>'Hugo Napoleão',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204659',
            'name'=>'Ilha Grande',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204709',
            'name'=>'Inhuma',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204808',
            'name'=>'Ipiranga do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2204907',
            'name'=>'Isaías Coelho',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205003',
            'name'=>'Itainópolis',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205102',
            'name'=>'Itaueira',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205151',
            'name'=>'Jacobina do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205201',
            'name'=>'Jaicós',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205250',
            'name'=>'Jardim do Mulato',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205276',
            'name'=>'Jatobá do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205300',
            'name'=>'Jerumenha',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205359',
            'name'=>'João Costa',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205409',
            'name'=>'Joaquim Pires',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205458',
            'name'=>'Joca Marques',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205508',
            'name'=>'José de Freitas',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205516',
            'name'=>'Juazeiro do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205524',
            'name'=>'Júlio Borges',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205532',
            'name'=>'Jurema',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205540',
            'name'=>'Lagoinha do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205557',
            'name'=>'Lagoa Alegre',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205565',
            'name'=>'Lagoa do Barro do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205573',
            'name'=>'Lagoa de São Francisco',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205581',
            'name'=>'Lagoa do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205599',
            'name'=>'Lagoa do Sítio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205607',
            'name'=>'Landri Sales',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205706',
            'name'=>'Luís Correia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205805',
            'name'=>'Luzilândia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205854',
            'name'=>'Madeiro',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205904',
            'name'=>'Manoel Emídio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2205953',
            'name'=>'Marcolândia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206001',
            'name'=>'Marcos Parente',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206050',
            'name'=>'Massapê do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206100',
            'name'=>'Matias Olímpio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206209',
            'name'=>'Miguel Alves',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206308',
            'name'=>'Miguel Leão',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206357',
            'name'=>'Milton Brandão',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206407',
            'name'=>'Monsenhor Gil',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206506',
            'name'=>'Monsenhor Hipólito',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206605',
            'name'=>'Monte Alegre do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206654',
            'name'=>'Morro Cabeça no Tempo',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206670',
            'name'=>'Morro do Chapéu do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206696',
            'name'=>'Murici dos Portelas',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206704',
            'name'=>'Nazaré do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206720',
            'name'=>'Nazária',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206753',
            'name'=>'Nossa Senhora de Nazaré',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206803',
            'name'=>'Nossa Senhora dos Remédios',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206902',
            'name'=>'Novo Oriente do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2206951',
            'name'=>'Novo Santo Antônio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207009',
            'name'=>'Oeiras',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207108',
            'name'=>'Olho D Água do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207207',
            'name'=>'Padre Marcos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207306',
            'name'=>'Paes Landim',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207355',
            'name'=>'Pajeú do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207405',
            'name'=>'Palmeira do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207504',
            'name'=>'Palmeirais',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207553',
            'name'=>'Paquetá',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207603',
            'name'=>'Parnaguá',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207702',
            'name'=>'Parnaíba',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207751',
            'name'=>'Passagem Franca do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207777',
            'name'=>'Patos do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207793',
            'name'=>'Pau D Arco do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207801',
            'name'=>'Paulistana',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207850',
            'name'=>'Pavussu',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207900',
            'name'=>'Pedro II',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207934',
            'name'=>'Pedro Laurentino',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2207959',
            'name'=>'Nova Santa Rita',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208007',
            'name'=>'Picos',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208106',
            'name'=>'Pimenteiras',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208205',
            'name'=>'Pio IX',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208304',
            'name'=>'Piracuruca',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208403',
            'name'=>'Piripiri',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208502',
            'name'=>'Porto',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208551',
            'name'=>'Porto Alegre do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208601',
            'name'=>'Prata do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208650',
            'name'=>'Queimada Nova',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208700',
            'name'=>'Redenção do Gurguéia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208809',
            'name'=>'Regeneração',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208858',
            'name'=>'Riacho Frio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208874',
            'name'=>'Ribeira do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2208908',
            'name'=>'Ribeiro Gonçalves',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209005',
            'name'=>'Rio Grande do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209104',
            'name'=>'Santa Cruz do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209153',
            'name'=>'Santa Cruz dos Milagres',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209203',
            'name'=>'Santa Filomena',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209302',
            'name'=>'Santa Luz',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209351',
            'name'=>'Santana do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209377',
            'name'=>'Santa Rosa do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209401',
            'name'=>'Santo Antônio de Lisboa',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209450',
            'name'=>'Santo Antônio dos Milagres',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209500',
            'name'=>'Santo Inácio do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209559',
            'name'=>'São Braz do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209609',
            'name'=>'São Félix do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209658',
            'name'=>'São Francisco de Assis do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209708',
            'name'=>'São Francisco do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209757',
            'name'=>'São Gonçalo do Gurguéia',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209807',
            'name'=>'São Gonçalo do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209856',
            'name'=>'São João da Canabrava',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209872',
            'name'=>'São João da Fronteira',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209906',
            'name'=>'São João da Serra',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209955',
            'name'=>'São João da Varjota',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2209971',
            'name'=>'São João do Arraial',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210003',
            'name'=>'São João do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210052',
            'name'=>'São José do Divino',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210102',
            'name'=>'São José do Peixe',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210201',
            'name'=>'São José do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210300',
            'name'=>'São Julião',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210359',
            'name'=>'São Lourenço do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210375',
            'name'=>'São Luis do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210383',
            'name'=>'São Miguel da Baixa Grande',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210391',
            'name'=>'São Miguel do Fidalgo',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210409',
            'name'=>'São Miguel do Tapuio',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210508',
            'name'=>'São Pedro do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210607',
            'name'=>'São Raimundo Nonato',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210623',
            'name'=>'Sebastião Barros',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210631',
            'name'=>'Sebastião Leal',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210656',
            'name'=>'Sigefredo Pacheco',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210706',
            'name'=>'Simões',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210805',
            'name'=>'Simplício Mendes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210904',
            'name'=>'Socorro do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210938',
            'name'=>'Sussuapara',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210953',
            'name'=>'Tamboril do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2210979',
            'name'=>'Tanque do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211001',
            'name'=>'Teresina',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211100',
            'name'=>'União',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211209',
            'name'=>'Uruçuí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211308',
            'name'=>'Valença do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211357',
            'name'=>'Várzea Branca',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211407',
            'name'=>'Várzea Grande',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211506',
            'name'=>'Vera Mendes',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211605',
            'name'=>'Vila Nova do Piauí',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2211704',
            'name'=>'Wall Ferraz',
            'state_id'=> State::where('uf','PI')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300101',
            'name'=>'Abaiara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300150',
            'name'=>'Acarape',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300200',
            'name'=>'Acaraú',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300309',
            'name'=>'Acopiara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300408',
            'name'=>'Aiuaba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300507',
            'name'=>'Alcântaras',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300606',
            'name'=>'Altaneira',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300705',
            'name'=>'Alto Santo',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300754',
            'name'=>'Amontada',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300804',
            'name'=>'Antonina do Norte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2300903',
            'name'=>'Apuiarés',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301000',
            'name'=>'Aquiraz',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301109',
            'name'=>'Aracati',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301208',
            'name'=>'Aracoiaba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301257',
            'name'=>'Ararendá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301307',
            'name'=>'Araripe',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301406',
            'name'=>'Aratuba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301505',
            'name'=>'Arneiroz',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301604',
            'name'=>'Assaré',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301703',
            'name'=>'Aurora',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301802',
            'name'=>'Baixio',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301851',
            'name'=>'Banabuiú',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301901',
            'name'=>'Barbalha',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2301950',
            'name'=>'Barreira',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302008',
            'name'=>'Barro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302057',
            'name'=>'Barroquinha',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302107',
            'name'=>'Baturité',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302206',
            'name'=>'Beberibe',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302305',
            'name'=>'Bela Cruz',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302404',
            'name'=>'Boa Viagem',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302503',
            'name'=>'Brejo Santo',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302602',
            'name'=>'Camocim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302701',
            'name'=>'Campos Sales',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302800',
            'name'=>'Canindé',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2302909',
            'name'=>'Capistrano',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303006',
            'name'=>'Caridade',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303105',
            'name'=>'Cariré',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303204',
            'name'=>'Caririaçu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303303',
            'name'=>'Cariús',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303402',
            'name'=>'Carnaubal',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303501',
            'name'=>'Cascavel',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303600',
            'name'=>'Catarina',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303659',
            'name'=>'Catunda',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303709',
            'name'=>'Caucaia',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303808',
            'name'=>'Cedro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303907',
            'name'=>'Chaval',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303931',
            'name'=>'Choró',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2303956',
            'name'=>'Chorozinho',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304004',
            'name'=>'Coreaú',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304103',
            'name'=>'Crateús',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304202',
            'name'=>'Crato',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304236',
            'name'=>'Croatá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304251',
            'name'=>'Cruz',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304269',
            'name'=>'Deputado Irapuan Pinheiro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304277',
            'name'=>'Ererê',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304285',
            'name'=>'Eusébio',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304301',
            'name'=>'Farias Brito',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304350',
            'name'=>'Forquilha',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304400',
            'name'=>'Fortaleza',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304459',
            'name'=>'Fortim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304509',
            'name'=>'Frecheirinha',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304608',
            'name'=>'General Sampaio',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304657',
            'name'=>'Graça',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304707',
            'name'=>'Granja',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304806',
            'name'=>'Granjeiro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304905',
            'name'=>'Groaíras',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2304954',
            'name'=>'Guaiúba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305001',
            'name'=>'Guaraciaba do Norte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305100',
            'name'=>'Guaramiranga',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305209',
            'name'=>'Hidrolândia',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305233',
            'name'=>'Horizonte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305266',
            'name'=>'Ibaretama',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305308',
            'name'=>'Ibiapina',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305332',
            'name'=>'Ibicuitinga',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305357',
            'name'=>'Icapuí',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305407',
            'name'=>'Icó',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305506',
            'name'=>'Iguatu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305605',
            'name'=>'Independência',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305654',
            'name'=>'Ipaporanga',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305704',
            'name'=>'Ipaumirim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305803',
            'name'=>'Ipu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2305902',
            'name'=>'Ipueiras',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306009',
            'name'=>'Iracema',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306108',
            'name'=>'Irauçuba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306207',
            'name'=>'Itaiçaba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306256',
            'name'=>'Itaitinga',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306306',
            'name'=>'Itapagé',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306405',
            'name'=>'Itapipoca',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306504',
            'name'=>'Itapiúna',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306553',
            'name'=>'Itarema',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306603',
            'name'=>'Itatira',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306702',
            'name'=>'Jaguaretama',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306801',
            'name'=>'Jaguaribara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2306900',
            'name'=>'Jaguaribe',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307007',
            'name'=>'Jaguaruana',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307106',
            'name'=>'Jardim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307205',
            'name'=>'Jati',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307254',
            'name'=>'Jijoca de Jericoacoara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307304',
            'name'=>'Juazeiro do Norte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307403',
            'name'=>'Jucás',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307502',
            'name'=>'Lavras da Mangabeira',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307601',
            'name'=>'Limoeiro do Norte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307635',
            'name'=>'Madalena',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307650',
            'name'=>'Maracanaú',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307700',
            'name'=>'Maranguape',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307809',
            'name'=>'Marco',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2307908',
            'name'=>'Martinópole',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308005',
            'name'=>'Massapê',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308104',
            'name'=>'Mauriti',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308203',
            'name'=>'Meruoca',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308302',
            'name'=>'Milagres',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308351',
            'name'=>'Milhã',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308377',
            'name'=>'Miraíma',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308401',
            'name'=>'Missão Velha',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308500',
            'name'=>'Mombaça',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308609',
            'name'=>'Monsenhor Tabosa',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308708',
            'name'=>'Morada Nova',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308807',
            'name'=>'Moraújo',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2308906',
            'name'=>'Morrinhos',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309003',
            'name'=>'Mucambo',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309102',
            'name'=>'Mulungu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309201',
            'name'=>'Nova Olinda',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309300',
            'name'=>'Nova Russas',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309409',
            'name'=>'Novo Oriente',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309458',
            'name'=>'Ocara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309508',
            'name'=>'Orós',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309607',
            'name'=>'Pacajus',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309706',
            'name'=>'Pacatuba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309805',
            'name'=>'Pacoti',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2309904',
            'name'=>'Pacujá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310001',
            'name'=>'Palhano',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310100',
            'name'=>'Palmácia',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310209',
            'name'=>'Paracuru',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310258',
            'name'=>'Paraipaba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310308',
            'name'=>'Parambu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310407',
            'name'=>'Paramoti',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310506',
            'name'=>'Pedra Branca',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310605',
            'name'=>'Penaforte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310704',
            'name'=>'Pentecoste',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310803',
            'name'=>'Pereiro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310852',
            'name'=>'Pindoretama',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310902',
            'name'=>'Piquet Carneiro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2310951',
            'name'=>'Pires Ferreira',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311009',
            'name'=>'Poranga',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311108',
            'name'=>'Porteiras',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311207',
            'name'=>'Potengi',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311231',
            'name'=>'Potiretama',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311264',
            'name'=>'Quiterianópolis',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311306',
            'name'=>'Quixadá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311355',
            'name'=>'Quixelô',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311405',
            'name'=>'Quixeramobim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311504',
            'name'=>'Quixeré',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311603',
            'name'=>'Redenção',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311702',
            'name'=>'Reriutaba',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311801',
            'name'=>'Russas',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311900',
            'name'=>'Saboeiro',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2311959',
            'name'=>'Salitre',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312007',
            'name'=>'Santana do Acaraú',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312106',
            'name'=>'Santana do Cariri',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312205',
            'name'=>'Santa Quitéria',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312304',
            'name'=>'São Benedito',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312403',
            'name'=>'São Gonçalo do Amarante',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312502',
            'name'=>'São João do Jaguaribe',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312601',
            'name'=>'São Luís do Curu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312700',
            'name'=>'Senador Pompeu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312809',
            'name'=>'Senador Sá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2312908',
            'name'=>'Sobral',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313005',
            'name'=>'Solonópole',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313104',
            'name'=>'Tabuleiro do Norte',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313203',
            'name'=>'Tamboril',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313252',
            'name'=>'Tarrafas',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313302',
            'name'=>'Tauá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313351',
            'name'=>'Tejuçuoca',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313401',
            'name'=>'Tianguá',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313500',
            'name'=>'Trairi',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313559',
            'name'=>'Tururu',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313609',
            'name'=>'Ubajara',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313708',
            'name'=>'Umari',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313757',
            'name'=>'Umirim',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313807',
            'name'=>'Uruburetama',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313906',
            'name'=>'Uruoca',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2313955',
            'name'=>'Varjota',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2314003',
            'name'=>'Várzea Alegre',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2314102',
            'name'=>'Viçosa do Ceará',
            'state_id'=> State::where('uf','CE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400109',
            'name'=>'Acari',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400208',
            'name'=>'Açu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400307',
            'name'=>'Afonso Bezerra',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400406',
            'name'=>'Água Nova',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400505',
            'name'=>'Alexandria',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400604',
            'name'=>'Almino Afonso',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400703',
            'name'=>'Alto do Rodrigues',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400802',
            'name'=>'Angicos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2400901',
            'name'=>'Antônio Martins',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401008',
            'name'=>'Apodi',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401107',
            'name'=>'Areia Branca',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401206',
            'name'=>'Arês',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401305',
            'name'=>'Augusto Severo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401404',
            'name'=>'Baía Formosa',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401453',
            'name'=>'Baraúna',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401503',
            'name'=>'Barcelona',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401602',
            'name'=>'Bento Fernandes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401651',
            'name'=>'Bodó',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401701',
            'name'=>'Bom Jesus',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401800',
            'name'=>'Brejinho',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401859',
            'name'=>'Caiçara do Norte',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2401909',
            'name'=>'Caiçara do Rio do Vento',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402006',
            'name'=>'Caicó',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402105',
            'name'=>'Campo Redondo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402204',
            'name'=>'Canguaretama',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402303',
            'name'=>'Caraúbas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402402',
            'name'=>'Carnaúba dos Dantas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402501',
            'name'=>'Carnaubais',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402600',
            'name'=>'Ceará-Mirim',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402709',
            'name'=>'Cerro Corá',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402808',
            'name'=>'Coronel Ezequiel',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2402907',
            'name'=>'Coronel João Pessoa',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403004',
            'name'=>'Cruzeta',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403103',
            'name'=>'Currais Novos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403202',
            'name'=>'Doutor Severiano',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403251',
            'name'=>'Parnamirim',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403301',
            'name'=>'Encanto',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403400',
            'name'=>'Equador',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403509',
            'name'=>'Espírito Santo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403608',
            'name'=>'Extremoz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403707',
            'name'=>'Felipe Guerra',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403756',
            'name'=>'Fernando Pedroza',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403806',
            'name'=>'Florânia',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2403905',
            'name'=>'Francisco Dantas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404002',
            'name'=>'Frutuoso Gomes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404101',
            'name'=>'Galinhos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404200',
            'name'=>'Goianinha',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404309',
            'name'=>'Governador Dix-Sept Rosado',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404408',
            'name'=>'Grossos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404507',
            'name'=>'Guamaré',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404606',
            'name'=>'Ielmo Marinho',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404705',
            'name'=>'Ipanguaçu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404804',
            'name'=>'Ipueira',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404853',
            'name'=>'Itajá',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2404903',
            'name'=>'Itaú',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405009',
            'name'=>'Jaçanã',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405108',
            'name'=>'Jandaíra',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405207',
            'name'=>'Janduís',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405306',
            'name'=>'Januário Cicco',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405405',
            'name'=>'Japi',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405504',
            'name'=>'Jardim de Angicos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405603',
            'name'=>'Jardim de Piranhas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405702',
            'name'=>'Jardim do Seridó',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405801',
            'name'=>'João Câmara',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2405900',
            'name'=>'João Dias',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406007',
            'name'=>'José da Penha',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406106',
            'name'=>'Jucurutu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406155',
            'name'=>'Jundiá',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406205',
            'name'=>'Lagoa D Anta',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406304',
            'name'=>'Lagoa de Pedras',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406403',
            'name'=>'Lagoa de Velhos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406502',
            'name'=>'Lagoa Nova',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406601',
            'name'=>'Lagoa Salgada',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406700',
            'name'=>'Lajes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406809',
            'name'=>'Lajes Pintadas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2406908',
            'name'=>'Lucrécia',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407005',
            'name'=>'Luís Gomes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407104',
            'name'=>'Macaíba',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407203',
            'name'=>'Macau',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407252',
            'name'=>'Major Sales',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407302',
            'name'=>'Marcelino Vieira',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407401',
            'name'=>'Martins',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407500',
            'name'=>'Maxaranguape',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407609',
            'name'=>'Messias Targino',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407708',
            'name'=>'Montanhas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407807',
            'name'=>'Monte Alegre',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2407906',
            'name'=>'Monte das Gameleiras',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408003',
            'name'=>'Mossoró',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408102',
            'name'=>'Natal',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408201',
            'name'=>'Nísia Floresta',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408300',
            'name'=>'Nova Cruz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408409',
            'name'=>'Olho-D Água do Borges',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408508',
            'name'=>'Ouro Branco',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408607',
            'name'=>'Paraná',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408706',
            'name'=>'Paraú',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408805',
            'name'=>'Parazinho',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408904',
            'name'=>'Parelhas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2408953',
            'name'=>'Rio do Fogo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409100',
            'name'=>'Passa e Fica',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409209',
            'name'=>'Passagem',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409308',
            'name'=>'Patu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409332',
            'name'=>'Santa Maria',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409407',
            'name'=>'Pau dos Ferros',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409506',
            'name'=>'Pedra Grande',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409605',
            'name'=>'Pedra Preta',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409704',
            'name'=>'Pedro Avelino',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409803',
            'name'=>'Pedro Velho',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2409902',
            'name'=>'Pendências',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410009',
            'name'=>'Pilões',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410108',
            'name'=>'Poço Branco',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410207',
            'name'=>'Portalegre',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410256',
            'name'=>'Porto do Mangue',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410306',
            'name'=>'Presidente Juscelino',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410405',
            'name'=>'Pureza',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410504',
            'name'=>'Rafael Fernandes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410603',
            'name'=>'Rafael Godeiro',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410702',
            'name'=>'Riacho da Cruz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410801',
            'name'=>'Riacho de Santana',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2410900',
            'name'=>'Riachuelo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411007',
            'name'=>'Rodolfo Fernandes',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411056',
            'name'=>'Tibau',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411106',
            'name'=>'Ruy Barbosa',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411205',
            'name'=>'Santa Cruz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411403',
            'name'=>'Santana do Matos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411429',
            'name'=>'Santana do Seridó',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411502',
            'name'=>'Santo Antônio',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411601',
            'name'=>'São Bento do Norte',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411700',
            'name'=>'São Bento do Trairí',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411809',
            'name'=>'São Fernando',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2411908',
            'name'=>'São Francisco do Oeste',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412005',
            'name'=>'São Gonçalo do Amarante',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412104',
            'name'=>'São João do Sabugi',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412203',
            'name'=>'São José de Mipibu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412302',
            'name'=>'São José do Campestre',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412401',
            'name'=>'São José do Seridó',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412500',
            'name'=>'São Miguel',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412559',
            'name'=>'São Miguel do Gostoso',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412609',
            'name'=>'São Paulo do Potengi',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412708',
            'name'=>'São Pedro',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412807',
            'name'=>'São Rafael',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2412906',
            'name'=>'São Tomé',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413003',
            'name'=>'São Vicente',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413102',
            'name'=>'Senador Elói de Souza',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413201',
            'name'=>'Senador Georgino Avelino',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413300',
            'name'=>'Serra de São Bento',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413359',
            'name'=>'Serra do Mel',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413409',
            'name'=>'Serra Negra do Norte',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413508',
            'name'=>'Serrinha',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413557',
            'name'=>'Serrinha dos Pintos',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413607',
            'name'=>'Severiano Melo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413706',
            'name'=>'Sítio Novo',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413805',
            'name'=>'Taboleiro Grande',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2413904',
            'name'=>'Taipu',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414001',
            'name'=>'Tangará',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414100',
            'name'=>'Tenente Ananias',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414159',
            'name'=>'Tenente Laurentino Cruz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414209',
            'name'=>'Tibau do Sul',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414308',
            'name'=>'Timbaúba dos Batistas',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414407',
            'name'=>'Touros',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414456',
            'name'=>'Triunfo Potiguar',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414506',
            'name'=>'Umarizal',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414605',
            'name'=>'Upanema',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414704',
            'name'=>'Várzea',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414753',
            'name'=>'Venha-Ver',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414803',
            'name'=>'Vera Cruz',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2414902',
            'name'=>'Viçosa',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2415008',
            'name'=>'Vila Flor',
            'state_id'=> State::where('uf','RN')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500106',
            'name'=>'Água Branca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500205',
            'name'=>'Aguiar',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500304',
            'name'=>'Alagoa Grande',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500403',
            'name'=>'Alagoa Nova',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500502',
            'name'=>'Alagoinha',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500536',
            'name'=>'Alcantil',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500577',
            'name'=>'Algodão de Jandaíra',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500601',
            'name'=>'Alhandra',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500700',
            'name'=>'São João do Rio do Peixe',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500734',
            'name'=>'Amparo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500775',
            'name'=>'Aparecida',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500809',
            'name'=>'Araçagi',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2500908',
            'name'=>'Arara',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501005',
            'name'=>'Araruna',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501104',
            'name'=>'Areia',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501153',
            'name'=>'Areia de Baraúnas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501203',
            'name'=>'Areial',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501302',
            'name'=>'Aroeiras',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501351',
            'name'=>'Assunção',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501401',
            'name'=>'Baía da Traição',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501500',
            'name'=>'Bananeiras',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501534',
            'name'=>'Baraúna',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501575',
            'name'=>'Barra de Santana',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501609',
            'name'=>'Barra de Santa Rosa',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501708',
            'name'=>'Barra de São Miguel',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501807',
            'name'=>'Bayeux',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2501906',
            'name'=>'Belém',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502003',
            'name'=>'Belém do Brejo do Cruz',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502052',
            'name'=>'Bernardino Batista',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502102',
            'name'=>'Boa Ventura',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502151',
            'name'=>'Boa Vista',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502201',
            'name'=>'Bom Jesus',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502300',
            'name'=>'Bom Sucesso',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502409',
            'name'=>'Bonito de Santa Fé',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502508',
            'name'=>'Boqueirão',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502607',
            'name'=>'Igaracy',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502706',
            'name'=>'Borborema',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502805',
            'name'=>'Brejo do Cruz',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2502904',
            'name'=>'Brejo dos Santos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503001',
            'name'=>'Caaporã',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503100',
            'name'=>'Cabaceiras',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503209',
            'name'=>'Cabedelo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503308',
            'name'=>'Cachoeira dos Índios',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503407',
            'name'=>'Cacimba de Areia',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503506',
            'name'=>'Cacimba de Dentro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503555',
            'name'=>'Cacimbas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503605',
            'name'=>'Caiçara',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503704',
            'name'=>'Cajazeiras',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503753',
            'name'=>'Cajazeirinhas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503803',
            'name'=>'Caldas Brandão',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2503902',
            'name'=>'Camalaú',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504009',
            'name'=>'Campina Grande',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504033',
            'name'=>'Capim',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504074',
            'name'=>'Caraúbas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504108',
            'name'=>'Carrapateira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504157',
            'name'=>'Casserengue',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504207',
            'name'=>'Catingueira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504306',
            'name'=>'Catolé do Rocha',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504355',
            'name'=>'Caturité',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504405',
            'name'=>'Conceição',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504504',
            'name'=>'Condado',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504603',
            'name'=>'Conde',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504702',
            'name'=>'Congo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504801',
            'name'=>'Coremas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504850',
            'name'=>'Coxixola',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2504900',
            'name'=>'Cruz do Espírito Santo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505006',
            'name'=>'Cubati',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505105',
            'name'=>'Cuité',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505204',
            'name'=>'Cuitegi',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505238',
            'name'=>'Cuité de Mamanguape',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505279',
            'name'=>'Curral de Cima',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505303',
            'name'=>'Curral Velho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505352',
            'name'=>'Damião',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505402',
            'name'=>'Desterro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505501',
            'name'=>'Vista Serrana',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505600',
            'name'=>'Diamante',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505709',
            'name'=>'Dona Inês',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505808',
            'name'=>'Duas Estradas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2505907',
            'name'=>'Emas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506004',
            'name'=>'Esperança',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506103',
            'name'=>'Fagundes',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506202',
            'name'=>'Frei Martinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506251',
            'name'=>'Gado Bravo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506301',
            'name'=>'Guarabira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506400',
            'name'=>'Gurinhém',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506509',
            'name'=>'Gurjão',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506608',
            'name'=>'Ibiara',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506707',
            'name'=>'Imaculada',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506806',
            'name'=>'Ingá',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2506905',
            'name'=>'Itabaiana',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507002',
            'name'=>'Itaporanga',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507101',
            'name'=>'Itapororoca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507200',
            'name'=>'Itatuba',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507309',
            'name'=>'Jacaraú',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507408',
            'name'=>'Jericó',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507507',
            'name'=>'João Pessoa',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507606',
            'name'=>'Juarez Távora',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507705',
            'name'=>'Juazeirinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507804',
            'name'=>'Junco do Seridó',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2507903',
            'name'=>'Juripiranga',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508000',
            'name'=>'Juru',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508109',
            'name'=>'Lagoa',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508208',
            'name'=>'Lagoa de Dentro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508307',
            'name'=>'Lagoa Seca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508406',
            'name'=>'Lastro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508505',
            'name'=>'Livramento',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508554',
            'name'=>'Logradouro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508604',
            'name'=>'Lucena',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508703',
            'name'=>'Mãe D Água',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508802',
            'name'=>'Malta',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2508901',
            'name'=>'Mamanguape',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509008',
            'name'=>'Manaíra',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509057',
            'name'=>'Marcação',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509107',
            'name'=>'Mari',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509156',
            'name'=>'Marizópolis',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509206',
            'name'=>'Massaranduba',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509305',
            'name'=>'Mataraca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509339',
            'name'=>'Matinhas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509370',
            'name'=>'Mato Grosso',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509396',
            'name'=>'Maturéia',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509404',
            'name'=>'Mogeiro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509503',
            'name'=>'Montadas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509602',
            'name'=>'Monte Horebe',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509701',
            'name'=>'Monteiro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509800',
            'name'=>'Mulungu',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2509909',
            'name'=>'Natuba',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510006',
            'name'=>'Nazarezinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510105',
            'name'=>'Nova Floresta',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510204',
            'name'=>'Nova Olinda',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510303',
            'name'=>'Nova Palmeira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510402',
            'name'=>'Olho D Água',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510501',
            'name'=>'Olivedos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510600',
            'name'=>'Ouro Velho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510659',
            'name'=>'Parari',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510709',
            'name'=>'Passagem',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510808',
            'name'=>'Patos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2510907',
            'name'=>'Paulista',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511004',
            'name'=>'Pedra Branca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511103',
            'name'=>'Pedra Lavrada',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511202',
            'name'=>'Pedras de Fogo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511301',
            'name'=>'Piancó',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511400',
            'name'=>'Picuí',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511509',
            'name'=>'Pilar',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511608',
            'name'=>'Pilões',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511707',
            'name'=>'Pilõezinhos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511806',
            'name'=>'Pirpirituba',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2511905',
            'name'=>'Pitimbu',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512002',
            'name'=>'Pocinhos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512036',
            'name'=>'Poço Dantas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512077',
            'name'=>'Poço de José de Moura',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512101',
            'name'=>'Pombal',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512200',
            'name'=>'Prata',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512309',
            'name'=>'Princesa Isabel',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512408',
            'name'=>'Puxinanã',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512507',
            'name'=>'Queimadas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512606',
            'name'=>'Quixabá',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512705',
            'name'=>'Remígio',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512721',
            'name'=>'Pedro Régis',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512747',
            'name'=>'Riachão',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512754',
            'name'=>'Riachão do Bacamarte',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512762',
            'name'=>'Riachão do Poço',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512788',
            'name'=>'Riacho de Santo Antônio',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512804',
            'name'=>'Riacho dos Cavalos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2512903',
            'name'=>'Rio Tinto',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513000',
            'name'=>'Salgadinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513109',
            'name'=>'Salgado de São Félix',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513158',
            'name'=>'Santa Cecília',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513208',
            'name'=>'Santa Cruz',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513307',
            'name'=>'Santa Helena',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513356',
            'name'=>'Santa Inês',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513406',
            'name'=>'Santa Luzia',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513505',
            'name'=>'Santana de Mangueira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513604',
            'name'=>'Santana dos Garrotes',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513653',
            'name'=>'Joca Claudino',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513703',
            'name'=>'Santa Rita',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513802',
            'name'=>'Santa Teresinha',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513851',
            'name'=>'Santo André',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513901',
            'name'=>'São Bento',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513927',
            'name'=>'São Bentinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513943',
            'name'=>'São Domingos do Cariri',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513968',
            'name'=>'São Domingos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2513984',
            'name'=>'São Francisco',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514008',
            'name'=>'São João do Cariri',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514107',
            'name'=>'São João do Tigre',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514206',
            'name'=>'São José da Lagoa Tapada',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514305',
            'name'=>'São José de Caiana',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514404',
            'name'=>'São José de Espinharas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514453',
            'name'=>'São José dos Ramos',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514503',
            'name'=>'São José de Piranhas',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514552',
            'name'=>'São José de Princesa',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514602',
            'name'=>'São José do Bonfim',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514651',
            'name'=>'São José do Brejo do Cruz',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514701',
            'name'=>'São José do Sabugi',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514800',
            'name'=>'São José dos Cordeiros',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2514909',
            'name'=>'São Mamede',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515005',
            'name'=>'São Miguel de Taipu',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515104',
            'name'=>'São Sebastião de Lagoa de Roça',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515203',
            'name'=>'São Sebastião do Umbuzeiro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515302',
            'name'=>'Sapé',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515401',
            'name'=>'São Vicente do Seridó',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515500',
            'name'=>'Serra Branca',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515609',
            'name'=>'Serra da Raiz',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515708',
            'name'=>'Serra Grande',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515807',
            'name'=>'Serra Redonda',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515906',
            'name'=>'Serraria',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515930',
            'name'=>'Sertãozinho',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2515971',
            'name'=>'Sobrado',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516003',
            'name'=>'Solânea',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516102',
            'name'=>'Soledade',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516151',
            'name'=>'Sossêgo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516201',
            'name'=>'Sousa',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516300',
            'name'=>'Sumé',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516409',
            'name'=>'Tacima',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516508',
            'name'=>'Taperoá',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516607',
            'name'=>'Tavares',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516706',
            'name'=>'Teixeira',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516755',
            'name'=>'Tenório',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516805',
            'name'=>'Triunfo',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2516904',
            'name'=>'Uiraúna',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2517001',
            'name'=>'Umbuzeiro',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2517100',
            'name'=>'Várzea',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2517209',
            'name'=>'Vieirópolis',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2517407',
            'name'=>'Zabelê',
            'state_id'=> State::where('uf','PB')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600054',
            'name'=>'Abreu e Lima',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600104',
            'name'=>'Afogados da Ingazeira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600203',
            'name'=>'Afrânio',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600302',
            'name'=>'Agrestina',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600401',
            'name'=>'Água Preta',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600500',
            'name'=>'Águas Belas',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600609',
            'name'=>'Alagoinha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600708',
            'name'=>'Aliança',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600807',
            'name'=>'Altinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2600906',
            'name'=>'Amaraji',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601003',
            'name'=>'Angelim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601052',
            'name'=>'Araçoiaba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601102',
            'name'=>'Araripina',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601201',
            'name'=>'Arcoverde',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601300',
            'name'=>'Barra de Guabiraba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601409',
            'name'=>'Barreiros',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601508',
            'name'=>'Belém de Maria',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601607',
            'name'=>'Belém do São Francisco',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601706',
            'name'=>'Belo Jardim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601805',
            'name'=>'Betânia',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2601904',
            'name'=>'Bezerros',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602001',
            'name'=>'Bodocó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602100',
            'name'=>'Bom Conselho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602209',
            'name'=>'Bom Jardim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602308',
            'name'=>'Bonito',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602407',
            'name'=>'Brejão',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602506',
            'name'=>'Brejinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602605',
            'name'=>'Brejo da Madre de Deus',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602704',
            'name'=>'Buenos Aires',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602803',
            'name'=>'Buíque',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2602902',
            'name'=>'Cabo de Santo Agostinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603009',
            'name'=>'Cabrobó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603108',
            'name'=>'Cachoeirinha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );

        City::firstOrCreate( [
            'ibge'=>'2603207',
            'name'=>'Caetés',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603306',
            'name'=>'Calçado',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603405',
            'name'=>'Calumbi',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603454',
            'name'=>'Camaragibe',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603504',
            'name'=>'Camocim de São Félix',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603603',
            'name'=>'Camutanga',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603702',
            'name'=>'Canhotinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603801',
            'name'=>'Capoeiras',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603900',
            'name'=>'Carnaíba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2603926',
            'name'=>'Carnaubeira da Penha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604007',
            'name'=>'Carpina',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604106',
            'name'=>'Caruaru',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604155',
            'name'=>'Casinhas',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604205',
            'name'=>'Catende',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604304',
            'name'=>'Cedro',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604403',
            'name'=>'Chã de Alegria',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604502',
            'name'=>'Chã Grande',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604601',
            'name'=>'Condado',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604700',
            'name'=>'Correntes',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604809',
            'name'=>'Cortês',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2604908',
            'name'=>'Cumaru',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605004',
            'name'=>'Cupira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605103',
            'name'=>'Custódia',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605152',
            'name'=>'Dormentes',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605202',
            'name'=>'Escada',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605301',
            'name'=>'Exu',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605400',
            'name'=>'Feira Nova',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605459',
            'name'=>'Fernando de Noronha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605509',
            'name'=>'Ferreiros',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605608',
            'name'=>'Flores',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605707',
            'name'=>'Floresta',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605806',
            'name'=>'Frei Miguelinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2605905',
            'name'=>'Gameleira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606002',
            'name'=>'Garanhuns',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606101',
            'name'=>'Glória do Goitá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606200',
            'name'=>'Goiana',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606309',
            'name'=>'Granito',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606408',
            'name'=>'Gravatá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606507',
            'name'=>'Iati',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606606',
            'name'=>'Ibimirim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606705',
            'name'=>'Ibirajuba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606804',
            'name'=>'Igarassu',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2606903',
            'name'=>'Iguaraci',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607000',
            'name'=>'Inajá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607109',
            'name'=>'Ingazeira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607208',
            'name'=>'Ipojuca',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607307',
            'name'=>'Ipubi',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607406',
            'name'=>'Itacuruba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607505',
            'name'=>'Itaíba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607604',
            'name'=>'Ilha de Itamaracá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607653',
            'name'=>'Itambé',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607703',
            'name'=>'Itapetim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607752',
            'name'=>'Itapissuma',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607802',
            'name'=>'Itaquitinga',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607901',
            'name'=>'Jaboatão dos Guararapes',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2607950',
            'name'=>'Jaqueira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608008',
            'name'=>'Jataúba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608057',
            'name'=>'Jatobá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608107',
            'name'=>'João Alfredo',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608206',
            'name'=>'Joaquim Nabuco',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608255',
            'name'=>'Jucati',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608305',
            'name'=>'Jupi',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608404',
            'name'=>'Jurema',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608453',
            'name'=>'Lagoa do Carro',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608503',
            'name'=>'Lagoa de Itaenga',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608602',
            'name'=>'Lagoa do Ouro',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608701',
            'name'=>'Lagoa dos Gatos',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608750',
            'name'=>'Lagoa Grande',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608800',
            'name'=>'Lajedo',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2608909',
            'name'=>'Limoeiro',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609006',
            'name'=>'Macaparana',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609105',
            'name'=>'Machados',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609154',
            'name'=>'Manari',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609204',
            'name'=>'Maraial',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609303',
            'name'=>'Mirandiba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609402',
            'name'=>'Moreno',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609501',
            'name'=>'Nazaré da Mata',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609600',
            'name'=>'Olinda',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609709',
            'name'=>'Orobó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609808',
            'name'=>'Orocó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2609907',
            'name'=>'Ouricuri',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610004',
            'name'=>'Palmares',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610103',
            'name'=>'Palmeirina',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610202',
            'name'=>'Panelas',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610301',
            'name'=>'Paranatama',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610400',
            'name'=>'Parnamirim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610509',
            'name'=>'Passira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610608',
            'name'=>'Paudalho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610707',
            'name'=>'Paulista',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610806',
            'name'=>'Pedra',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2610905',
            'name'=>'Pesqueira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611002',
            'name'=>'Petrolândia',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611101',
            'name'=>'Petrolina',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611200',
            'name'=>'Poção',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611309',
            'name'=>'Pombos',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611408',
            'name'=>'Primavera',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611507',
            'name'=>'Quipapá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611533',
            'name'=>'Quixaba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611606',
            'name'=>'Recife',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611705',
            'name'=>'Riacho das Almas',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611804',
            'name'=>'Ribeirão',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2611903',
            'name'=>'Rio Formoso',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612000',
            'name'=>'Sairé',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612109',
            'name'=>'Salgadinho',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612208',
            'name'=>'Salgueiro',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612307',
            'name'=>'Saloá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612406',
            'name'=>'Sanharó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612455',
            'name'=>'Santa Cruz',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612471',
            'name'=>'Santa Cruz da Baixa Verde',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612505',
            'name'=>'Santa Cruz do Capibaribe',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612554',
            'name'=>'Santa Filomena',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612604',
            'name'=>'Santa Maria da Boa Vista',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612703',
            'name'=>'Santa Maria do Cambucá',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612802',
            'name'=>'Santa Terezinha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2612901',
            'name'=>'São Benedito do Sul',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613008',
            'name'=>'São Bento do Una',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613107',
            'name'=>'São Caitano',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613206',
            'name'=>'São João',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613305',
            'name'=>'São Joaquim do Monte',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613404',
            'name'=>'São José da Coroa Grande',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613503',
            'name'=>'São José do Belmonte',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613602',
            'name'=>'São José do Egito',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613701',
            'name'=>'São Lourenço da Mata',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613800',
            'name'=>'São Vicente Ferrer',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2613909',
            'name'=>'Serra Talhada',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614006',
            'name'=>'Serrita',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614105',
            'name'=>'Sertânia',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614204',
            'name'=>'Sirinhaém',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614303',
            'name'=>'Moreilândia',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614402',
            'name'=>'Solidão',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614501',
            'name'=>'Surubim',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614600',
            'name'=>'Tabira',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614709',
            'name'=>'Tacaimbó',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614808',
            'name'=>'Tacaratu',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2614857',
            'name'=>'Tamandaré',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615003',
            'name'=>'Taquaritinga do Norte',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615102',
            'name'=>'Terezinha',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615201',
            'name'=>'Terra Nova',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615300',
            'name'=>'Timbaúba',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615409',
            'name'=>'Toritama',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615508',
            'name'=>'Tracunhaém',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615607',
            'name'=>'Trindade',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615706',
            'name'=>'Triunfo',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615805',
            'name'=>'Tupanatinga',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2615904',
            'name'=>'Tuparetama',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616001',
            'name'=>'Venturosa',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616100',
            'name'=>'Verdejante',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616183',
            'name'=>'Vertente do Lério',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616209',
            'name'=>'Vertentes',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616308',
            'name'=>'Vicência',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616407',
            'name'=>'Vitória de Santo Antão',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2616506',
            'name'=>'Xexéu',
            'state_id'=> State::where('uf','PE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700102',
            'name'=>'Água Branca',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700201',
            'name'=>'Anadia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700300',
            'name'=>'Arapiraca',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700409',
            'name'=>'Atalaia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700508',
            'name'=>'Barra de Santo Antônio',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700607',
            'name'=>'Barra de São Miguel',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700706',
            'name'=>'Batalha',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700805',
            'name'=>'Belém',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2700904',
            'name'=>'Belo Monte',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701001',
            'name'=>'Boca da Mata',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701100',
            'name'=>'Branquinha',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701209',
            'name'=>'Cacimbinhas',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701308',
            'name'=>'Cajueiro',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701357',
            'name'=>'Campestre',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701407',
            'name'=>'Campo Alegre',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701506',
            'name'=>'Campo Grande',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701605',
            'name'=>'Canapi',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701704',
            'name'=>'Capela',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701803',
            'name'=>'Carneiros',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2701902',
            'name'=>'Chã Preta',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702009',
            'name'=>'Coité do Nóia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702108',
            'name'=>'Colônia Leopoldina',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702207',
            'name'=>'Coqueiro Seco',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702306',
            'name'=>'Coruripe',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702355',
            'name'=>'Craíbas',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702405',
            'name'=>'Delmiro Gouveia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702504',
            'name'=>'Dois Riachos',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702553',
            'name'=>'Estrela de Alagoas',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702603',
            'name'=>'Feira Grande',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702702',
            'name'=>'Feliz Deserto',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702801',
            'name'=>'Flexeiras',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2702900',
            'name'=>'Girau do Ponciano',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703007',
            'name'=>'Ibateguara',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703106',
            'name'=>'Igaci',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703205',
            'name'=>'Igreja Nova',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703304',
            'name'=>'Inhapi',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703403',
            'name'=>'Jacaré dos Homens',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703502',
            'name'=>'Jacuípe',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703601',
            'name'=>'Japaratinga',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703700',
            'name'=>'Jaramataia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703759',
            'name'=>'Jequiá da Praia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703809',
            'name'=>'Joaquim Gomes',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2703908',
            'name'=>'Jundiá',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704005',
            'name'=>'Junqueiro',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704104',
            'name'=>'Lagoa da Canoa',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704203',
            'name'=>'Limoeiro de Anadia',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704302',
            'name'=>'Maceió',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704401',
            'name'=>'Major Isidoro',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704500',
            'name'=>'Maragogi',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704609',
            'name'=>'Maravilha',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704708',
            'name'=>'Marechal Deodoro',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704807',
            'name'=>'Maribondo',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2704906',
            'name'=>'Mar Vermelho',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705002',
            'name'=>'Mata Grande',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705101',
            'name'=>'Matriz de Camaragibe',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705200',
            'name'=>'Messias',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705309',
            'name'=>'Minador do Negrão',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705408',
            'name'=>'Monteirópolis',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705507',
            'name'=>'Murici',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705606',
            'name'=>'Novo Lino',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705705',
            'name'=>'Olho D Água das Flores',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705804',
            'name'=>'Olho D Água do Casado',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2705903',
            'name'=>'Olho D Água Grande',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706000',
            'name'=>'Olivença',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706109',
            'name'=>'Ouro Branco',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706208',
            'name'=>'Palestina',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706307',
            'name'=>'Palmeira dos Índios',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706406',
            'name'=>'Pão de Açúcar',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706422',
            'name'=>'Pariconha',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706448',
            'name'=>'Paripueira',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706505',
            'name'=>'Passo de Camaragibe',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706604',
            'name'=>'Paulo Jacinto',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706703',
            'name'=>'Penedo',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706802',
            'name'=>'Piaçabuçu',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2706901',
            'name'=>'Pilar',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707008',
            'name'=>'Pindoba',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707107',
            'name'=>'Piranhas',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707206',
            'name'=>'Poço das Trincheiras',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707305',
            'name'=>'Porto Calvo',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707404',
            'name'=>'Porto de Pedras',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707503',
            'name'=>'Porto Real do Colégio',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707602',
            'name'=>'Quebrangulo',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707701',
            'name'=>'Rio Largo',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707800',
            'name'=>'Roteiro',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2707909',
            'name'=>'Santa Luzia do Norte',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708006',
            'name'=>'Santana do Ipanema',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708105',
            'name'=>'Santana do Mundaú',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708204',
            'name'=>'São Brás',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708303',
            'name'=>'São José da Laje',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708402',
            'name'=>'São José da Tapera',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708501',
            'name'=>'São Luís do Quitunde',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708600',
            'name'=>'São Miguel dos Campos',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708709',
            'name'=>'São Miguel dos Milagres',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708808',
            'name'=>'São Sebastião',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708907',
            'name'=>'Satuba',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2708956',
            'name'=>'Senador Rui Palmeira',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709004',
            'name'=>'Tanque D Arca',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709103',
            'name'=>'Taquarana',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709152',
            'name'=>'Teotônio Vilela',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709202',
            'name'=>'Traipu',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709301',
            'name'=>'União dos Palmares',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2709400',
            'name'=>'Viçosa',
            'state_id'=> State::where('uf','AL')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800100',
            'name'=>'Amparo de São Francisco',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800209',
            'name'=>'Aquidabã',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800308',
            'name'=>'Aracaju',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800407',
            'name'=>'Arauá',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800506',
            'name'=>'Areia Branca',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800605',
            'name'=>'Barra dos Coqueiros',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800670',
            'name'=>'Boquim',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2800704',
            'name'=>'Brejo Grande',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801009',
            'name'=>'Campo do Brito',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801108',
            'name'=>'Canhoba',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801207',
            'name'=>'Canindé de São Francisco',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801306',
            'name'=>'Capela',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801405',
            'name'=>'Carira',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801504',
            'name'=>'Carmópolis',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801603',
            'name'=>'Cedro de São João',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801702',
            'name'=>'Cristinápolis',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2801900',
            'name'=>'Cumbe',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802007',
            'name'=>'Divina Pastora',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802106',
            'name'=>'Estância',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802205',
            'name'=>'Feira Nova',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802304',
            'name'=>'Frei Paulo',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802403',
            'name'=>'Gararu',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802502',
            'name'=>'General Maynard',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802601',
            'name'=>'Gracho Cardoso',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802700',
            'name'=>'Ilha das Flores',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802809',
            'name'=>'Indiaroba',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2802908',
            'name'=>'Itabaiana',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803005',
            'name'=>'Itabaianinha',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803104',
            'name'=>'Itabi',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803203',
            'name'=>'Itaporanga D Ajuda',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803302',
            'name'=>'Japaratuba',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803401',
            'name'=>'Japoatã',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803500',
            'name'=>'Lagarto',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803609',
            'name'=>'Laranjeiras',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803708',
            'name'=>'Macambira',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803807',
            'name'=>'Malhada dos Bois',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2803906',
            'name'=>'Malhador',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804003',
            'name'=>'Maruim',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804102',
            'name'=>'Moita Bonita',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804201',
            'name'=>'Monte Alegre de Sergipe',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804300',
            'name'=>'Muribeca',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804409',
            'name'=>'Neópolis',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804458',
            'name'=>'Nossa Senhora Aparecida',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804508',
            'name'=>'Nossa Senhora da Glória',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804607',
            'name'=>'Nossa Senhora das Dores',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804706',
            'name'=>'Nossa Senhora de Lourdes',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804805',
            'name'=>'Nossa Senhora do Socorro',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2804904',
            'name'=>'Pacatuba',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805000',
            'name'=>'Pedra Mole',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805109',
            'name'=>'Pedrinhas',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805208',
            'name'=>'Pinhão',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805307',
            'name'=>'Pirambu',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805406',
            'name'=>'Poço Redondo',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805505',
            'name'=>'Poço Verde',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805604',
            'name'=>'Porto da Folha',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805703',
            'name'=>'Propriá',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805802',
            'name'=>'Riachão do Dantas',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2805901',
            'name'=>'Riachuelo',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806008',
            'name'=>'Ribeirópolis',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806107',
            'name'=>'Rosário do Catete',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806206',
            'name'=>'Salgado',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806305',
            'name'=>'Santa Luzia do Itanhy',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806404',
            'name'=>'Santana do São Francisco',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806503',
            'name'=>'Santa Rosa de Lima',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806602',
            'name'=>'Santo Amaro das Brotas',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806701',
            'name'=>'São Cristóvão',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806800',
            'name'=>'São Domingos',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2806909',
            'name'=>'São Francisco',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807006',
            'name'=>'São Miguel do Aleixo',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807105',
            'name'=>'Simão Dias',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807204',
            'name'=>'Siriri',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807303',
            'name'=>'Telha',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807402',
            'name'=>'Tobias Barreto',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807501',
            'name'=>'Tomar do Geru',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2807600',
            'name'=>'Umbaúba',
            'state_id'=> State::where('uf','SE')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900108',
            'name'=>'Abaíra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900207',
            'name'=>'Abaré',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900306',
            'name'=>'Acajutiba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900355',
            'name'=>'Adustina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900405',
            'name'=>'Água Fria',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900504',
            'name'=>'Érico Cardoso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900603',
            'name'=>'Aiquara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900702',
            'name'=>'Alagoinhas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900801',
            'name'=>'Alcobaça',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2900900',
            'name'=>'Almadina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901007',
            'name'=>'Amargosa',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901106',
            'name'=>'Amélia Rodrigues',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901155',
            'name'=>'América Dourada',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901205',
            'name'=>'Anagé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901304',
            'name'=>'Andaraí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901353',
            'name'=>'Andorinha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901403',
            'name'=>'Angical',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901502',
            'name'=>'Anguera',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901601',
            'name'=>'Antas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901700',
            'name'=>'Antônio Cardoso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901809',
            'name'=>'Antônio Gonçalves',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901908',
            'name'=>'Aporá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2901957',
            'name'=>'Apuarema',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902005',
            'name'=>'Aracatu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902054',
            'name'=>'Araças',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902104',
            'name'=>'Araci',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902203',
            'name'=>'Aramari',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902252',
            'name'=>'Arataca',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902302',
            'name'=>'Aratuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902401',
            'name'=>'Aurelino Leal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902500',
            'name'=>'Baianópolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902609',
            'name'=>'Baixa Grande',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902658',
            'name'=>'Banzaê',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902708',
            'name'=>'Barra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902807',
            'name'=>'Barra da Estiva',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2902906',
            'name'=>'Barra do Choça',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903003',
            'name'=>'Barra do Mendes',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903102',
            'name'=>'Barra do Rocha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903201',
            'name'=>'Barreiras',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903235',
            'name'=>'Barro Alto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903276',
            'name'=>'Barrocas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903300',
            'name'=>'Barro Preto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903409',
            'name'=>'Belmonte',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903508',
            'name'=>'Belo Campo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903607',
            'name'=>'Biritinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903706',
            'name'=>'Boa Nova',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903805',
            'name'=>'Boa Vista do Tupim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903904',
            'name'=>'Bom Jesus da Lapa',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2903953',
            'name'=>'Bom Jesus da Serra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904001',
            'name'=>'Boninal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904050',
            'name'=>'Bonito',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904100',
            'name'=>'Boquira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904209',
            'name'=>'Botuporã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904308',
            'name'=>'Brejões',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904407',
            'name'=>'Brejolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904506',
            'name'=>'Brotas de Macaúbas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904605',
            'name'=>'Brumado',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904704',
            'name'=>'Buerarema',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904753',
            'name'=>'Buritirama',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904803',
            'name'=>'Caatiba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904852',
            'name'=>'Cabaceiras do Paraguaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2904902',
            'name'=>'Cachoeira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905008',
            'name'=>'Caculé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905107',
            'name'=>'Caém',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905156',
            'name'=>'Caetanos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905206',
            'name'=>'Caetité',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905305',
            'name'=>'Cafarnaum',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905404',
            'name'=>'Cairu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905503',
            'name'=>'Caldeirão Grande',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905602',
            'name'=>'Camacan',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905701',
            'name'=>'Camaçari',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905800',
            'name'=>'Camamu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2905909',
            'name'=>'Campo Alegre de Lourdes',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906006',
            'name'=>'Campo Formoso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906105',
            'name'=>'Canápolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906204',
            'name'=>'Canarana',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906303',
            'name'=>'Canavieiras',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906402',
            'name'=>'Candeal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906501',
            'name'=>'Candeias',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906600',
            'name'=>'Candiba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906709',
            'name'=>'Cândido Sales',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906808',
            'name'=>'Cansanção',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906824',
            'name'=>'Canudos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906857',
            'name'=>'Capela do Alto Alegre',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906873',
            'name'=>'Capim Grosso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906899',
            'name'=>'Caraíbas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2906907',
            'name'=>'Caravelas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907004',
            'name'=>'Cardeal da Silva',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907103',
            'name'=>'Carinhanha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907202',
            'name'=>'Casa Nova',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907301',
            'name'=>'Castro Alves',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907400',
            'name'=>'Catolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907509',
            'name'=>'Catu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907558',
            'name'=>'Caturama',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907608',
            'name'=>'Central',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907707',
            'name'=>'Chorrochó',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907806',
            'name'=>'Cícero Dantas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2907905',
            'name'=>'Cipó',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908002',
            'name'=>'Coaraci',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908101',
            'name'=>'Cocos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908200',
            'name'=>'Conceição da Feira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908309',
            'name'=>'Conceição do Almeida',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908408',
            'name'=>'Conceição do Coité',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908507',
            'name'=>'Conceição do Jacuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908606',
            'name'=>'Conde',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908705',
            'name'=>'Condeúba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908804',
            'name'=>'Contendas do Sincorá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2908903',
            'name'=>'Coração de Maria',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909000',
            'name'=>'Cordeiros',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909109',
            'name'=>'Coribe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909208',
            'name'=>'Coronel João Sá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909307',
            'name'=>'Correntina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909406',
            'name'=>'Cotegipe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909505',
            'name'=>'Cravolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909604',
            'name'=>'Crisópolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909703',
            'name'=>'Cristópolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909802',
            'name'=>'Cruz das Almas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2909901',
            'name'=>'Curaçá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910008',
            'name'=>'Dário Meira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910057',
            'name'=>'Dias D Ávila',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910107',
            'name'=>'Dom Basílio',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910206',
            'name'=>'Dom Macedo Costa',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910305',
            'name'=>'Elísio Medrado',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910404',
            'name'=>'Encruzilhada',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910503',
            'name'=>'Entre Rios',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910602',
            'name'=>'Esplanada',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910701',
            'name'=>'Euclides da Cunha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910727',
            'name'=>'Eunápolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910750',
            'name'=>'Fátima',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910776',
            'name'=>'Feira da Mata',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910800',
            'name'=>'Feira de Santana',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910859',
            'name'=>'Filadélfia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2910909',
            'name'=>'Firmino Alves',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911006',
            'name'=>'Floresta Azul',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911105',
            'name'=>'Formosa do Rio Preto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911204',
            'name'=>'Gandu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911253',
            'name'=>'Gavião',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911303',
            'name'=>'Gentio do Ouro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911402',
            'name'=>'Glória',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911501',
            'name'=>'Gongogi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911600',
            'name'=>'Governador Mangabeira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911659',
            'name'=>'Guajeru',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911709',
            'name'=>'Guanambi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911808',
            'name'=>'Guaratinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911857',
            'name'=>'Heliópolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2911907',
            'name'=>'Iaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912004',
            'name'=>'Ibiassucê',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912103',
            'name'=>'Ibicaraí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912202',
            'name'=>'Ibicoara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912301',
            'name'=>'Ibicuí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912400',
            'name'=>'Ibipeba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912509',
            'name'=>'Ibipitanga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912608',
            'name'=>'Ibiquera',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912707',
            'name'=>'Ibirapitanga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912806',
            'name'=>'Ibirapuã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2912905',
            'name'=>'Ibirataia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913002',
            'name'=>'Ibitiara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913101',
            'name'=>'Ibititá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913200',
            'name'=>'Ibotirama',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913309',
            'name'=>'Ichu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913408',
            'name'=>'Igaporã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913457',
            'name'=>'Igrapiúna',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913507',
            'name'=>'Iguaí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913606',
            'name'=>'Ilhéus',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913705',
            'name'=>'Inhambupe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913804',
            'name'=>'Ipecaetá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2913903',
            'name'=>'Ipiaú',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914000',
            'name'=>'Ipirá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914109',
            'name'=>'Ipupiara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914208',
            'name'=>'Irajuba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914307',
            'name'=>'Iramaia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914406',
            'name'=>'Iraquara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914505',
            'name'=>'Irará',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914604',
            'name'=>'Irecê',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914653',
            'name'=>'Itabela',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914703',
            'name'=>'Itaberaba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914802',
            'name'=>'Itabuna',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2914901',
            'name'=>'Itacaré',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915007',
            'name'=>'Itaeté',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915106',
            'name'=>'Itagi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915205',
            'name'=>'Itagibá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915304',
            'name'=>'Itagimirim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915353',
            'name'=>'Itaguaçu da Bahia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915403',
            'name'=>'Itaju do Colônia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915502',
            'name'=>'Itajuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915601',
            'name'=>'Itamaraju',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915700',
            'name'=>'Itamari',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915809',
            'name'=>'Itambé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2915908',
            'name'=>'Itanagra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916005',
            'name'=>'Itanhém',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916104',
            'name'=>'Itaparica',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916203',
            'name'=>'Itapé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916302',
            'name'=>'Itapebi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916401',
            'name'=>'Itapetinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916500',
            'name'=>'Itapicuru',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916609',
            'name'=>'Itapitanga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916708',
            'name'=>'Itaquara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916807',
            'name'=>'Itarantim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916856',
            'name'=>'Itatim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2916906',
            'name'=>'Itiruçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917003',
            'name'=>'Itiúba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917102',
            'name'=>'Itororó',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917201',
            'name'=>'Ituaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917300',
            'name'=>'Ituberá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917334',
            'name'=>'Iuiú',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917359',
            'name'=>'Jaborandi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917409',
            'name'=>'Jacaraci',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917508',
            'name'=>'Jacobina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917607',
            'name'=>'Jaguaquara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917706',
            'name'=>'Jaguarari',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917805',
            'name'=>'Jaguaripe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2917904',
            'name'=>'Jandaíra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918001',
            'name'=>'Jequié',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918100',
            'name'=>'Jeremoabo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918209',
            'name'=>'Jiquiriçá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918308',
            'name'=>'Jitaúna',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918357',
            'name'=>'João Dourado',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918407',
            'name'=>'Juazeiro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918456',
            'name'=>'Jucuruçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918506',
            'name'=>'Jussara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918555',
            'name'=>'Jussari',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918605',
            'name'=>'Jussiape',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918704',
            'name'=>'Lafaiete Coutinho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918753',
            'name'=>'Lagoa Real',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918803',
            'name'=>'Laje',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2918902',
            'name'=>'Lajedão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919009',
            'name'=>'Lajedinho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919058',
            'name'=>'Lajedo do Tabocal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919108',
            'name'=>'Lamarão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919157',
            'name'=>'Lapão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919207',
            'name'=>'Lauro de Freitas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919306',
            'name'=>'Lençóis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919405',
            'name'=>'Licínio de Almeida',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919504',
            'name'=>'Livramento de Nossa Senhora',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919553',
            'name'=>'Luís Eduardo Magalhães',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919603',
            'name'=>'Macajuba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919702',
            'name'=>'Macarani',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919801',
            'name'=>'Macaúbas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919900',
            'name'=>'Macururé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919926',
            'name'=>'Madre de Deus',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2919959',
            'name'=>'Maetinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920007',
            'name'=>'Maiquinique',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920106',
            'name'=>'Mairi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920205',
            'name'=>'Malhada',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920304',
            'name'=>'Malhada de Pedras',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920403',
            'name'=>'Manoel Vitorino',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920452',
            'name'=>'Mansidão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920502',
            'name'=>'Maracás',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920601',
            'name'=>'Maragogipe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920700',
            'name'=>'Maraú',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920809',
            'name'=>'Marcionílio Souza',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2920908',
            'name'=>'Mascote',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921005',
            'name'=>'Mata de São João',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921054',
            'name'=>'Matina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921104',
            'name'=>'Medeiros Neto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921203',
            'name'=>'Miguel Calmon',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921302',
            'name'=>'Milagres',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921401',
            'name'=>'Mirangaba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921450',
            'name'=>'Mirante',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921500',
            'name'=>'Monte Santo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921609',
            'name'=>'Morpará',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921708',
            'name'=>'Morro do Chapéu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921807',
            'name'=>'Mortugaba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2921906',
            'name'=>'Mucugê',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922003',
            'name'=>'Mucuri',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922052',
            'name'=>'Mulungu do Morro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922102',
            'name'=>'Mundo Novo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922201',
            'name'=>'Muniz Ferreira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922250',
            'name'=>'Muquém de São Francisco',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922300',
            'name'=>'Muritiba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922409',
            'name'=>'Mutuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922508',
            'name'=>'Nazaré',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922607',
            'name'=>'Nilo Peçanha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922656',
            'name'=>'Nordestina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922706',
            'name'=>'Nova Canaã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922730',
            'name'=>'Nova Fátima',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922755',
            'name'=>'Nova Ibiá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922805',
            'name'=>'Nova Itarana',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922854',
            'name'=>'Nova Redenção',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2922904',
            'name'=>'Nova Soure',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923001',
            'name'=>'Nova Viçosa',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923035',
            'name'=>'Novo Horizonte',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923050',
            'name'=>'Novo Triunfo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923100',
            'name'=>'Olindina',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923209',
            'name'=>'Oliveira dos Brejinhos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923308',
            'name'=>'Ouriçangas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923357',
            'name'=>'Ourolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923407',
            'name'=>'Palmas de Monte Alto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923506',
            'name'=>'Palmeiras',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923605',
            'name'=>'Paramirim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923704',
            'name'=>'Paratinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923803',
            'name'=>'Paripiranga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2923902',
            'name'=>'Pau Brasil',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924009',
            'name'=>'Paulo Afonso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924058',
            'name'=>'Pé de Serra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924108',
            'name'=>'Pedrão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924207',
            'name'=>'Pedro Alexandre',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924306',
            'name'=>'Piatã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924405',
            'name'=>'Pilão Arcado',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924504',
            'name'=>'Pindaí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924603',
            'name'=>'Pindobaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924652',
            'name'=>'Pintadas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924678',
            'name'=>'Piraí do Norte',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924702',
            'name'=>'Piripá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924801',
            'name'=>'Piritiba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2924900',
            'name'=>'Planaltino',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925006',
            'name'=>'Planalto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925105',
            'name'=>'Poções',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925204',
            'name'=>'Pojuca',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925253',
            'name'=>'Ponto Novo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925303',
            'name'=>'Porto Seguro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925402',
            'name'=>'Potiraguá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925501',
            'name'=>'Prado',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925600',
            'name'=>'Presidente Dutra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925709',
            'name'=>'Presidente Jânio Quadros',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925758',
            'name'=>'Presidente Tancredo Neves',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925808',
            'name'=>'Queimadas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925907',
            'name'=>'Quijingue',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925931',
            'name'=>'Quixabeira',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2925956',
            'name'=>'Rafael Jambeiro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926004',
            'name'=>'Remanso',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926103',
            'name'=>'Retirolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926202',
            'name'=>'Riachão das Neves',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926301',
            'name'=>'Riachão do Jacuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926400',
            'name'=>'Riacho de Santana',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926509',
            'name'=>'Ribeira do Amparo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926608',
            'name'=>'Ribeira do Pombal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926657',
            'name'=>'Ribeirão do Largo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926707',
            'name'=>'Rio de Contas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926806',
            'name'=>'Rio do Antônio',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2926905',
            'name'=>'Rio do Pires',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927002',
            'name'=>'Rio Real',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927101',
            'name'=>'Rodelas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927200',
            'name'=>'Ruy Barbosa',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927309',
            'name'=>'Salinas da Margarida',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927408',
            'name'=>'Salvador',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927507',
            'name'=>'Santa Bárbara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927606',
            'name'=>'Santa Brígida',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927705',
            'name'=>'Santa Cruz Cabrália',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927804',
            'name'=>'Santa Cruz da Vitória',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2927903',
            'name'=>'Santa Inês',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928000',
            'name'=>'Santaluz',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928059',
            'name'=>'Santa Luzia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928109',
            'name'=>'Santa Maria da Vitória',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928208',
            'name'=>'Santana',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928307',
            'name'=>'Santanópolis',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928406',
            'name'=>'Santa Rita de Cássia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928505',
            'name'=>'Santa Teresinha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928604',
            'name'=>'Santo Amaro',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928703',
            'name'=>'Santo Antônio de Jesus',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928802',
            'name'=>'Santo Estêvão',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928901',
            'name'=>'São Desidério',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2928950',
            'name'=>'São Domingos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929008',
            'name'=>'São Félix',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929057',
            'name'=>'São Félix do Coribe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929107',
            'name'=>'São Felipe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929206',
            'name'=>'São Francisco do Conde',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929255',
            'name'=>'São Gabriel',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929305',
            'name'=>'São Gonçalo dos Campos',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929354',
            'name'=>'São José da Vitória',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929370',
            'name'=>'São José do Jacuípe',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929404',
            'name'=>'São Miguel das Matas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929503',
            'name'=>'São Sebastião do Passé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929602',
            'name'=>'Sapeaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929701',
            'name'=>'Sátiro Dias',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929750',
            'name'=>'Saubara',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929800',
            'name'=>'Saúde',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2929909',
            'name'=>'Seabra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930006',
            'name'=>'Sebastião Laranjeiras',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930105',
            'name'=>'Senhor do Bonfim',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930154',
            'name'=>'Serra do Ramalho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930204',
            'name'=>'Sento Sé',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930303',
            'name'=>'Serra Dourada',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930402',
            'name'=>'Serra Preta',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930501',
            'name'=>'Serrinha',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930600',
            'name'=>'Serrolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930709',
            'name'=>'Simões Filho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930758',
            'name'=>'Sítio do Mato',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930766',
            'name'=>'Sítio do Quinto',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930774',
            'name'=>'Sobradinho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930808',
            'name'=>'Souto Soares',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2930907',
            'name'=>'Tabocas do Brejo Velho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931004',
            'name'=>'Tanhaçu',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931053',
            'name'=>'Tanque Novo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931103',
            'name'=>'Tanquinho',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931202',
            'name'=>'Taperoá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931301',
            'name'=>'Tapiramutá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931350',
            'name'=>'Teixeira de Freitas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931400',
            'name'=>'Teodoro Sampaio',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931509',
            'name'=>'Teofilândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931608',
            'name'=>'Teolândia',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931707',
            'name'=>'Terra Nova',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931806',
            'name'=>'Tremedal',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2931905',
            'name'=>'Tucano',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932002',
            'name'=>'Uauá',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932101',
            'name'=>'Ubaíra',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932200',
            'name'=>'Ubaitaba',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932309',
            'name'=>'Ubatã',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932408',
            'name'=>'Uibaí',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932457',
            'name'=>'Umburanas',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932507',
            'name'=>'Una',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932606',
            'name'=>'Urandi',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932705',
            'name'=>'Uruçuca',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932804',
            'name'=>'Utinga',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2932903',
            'name'=>'Valença',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933000',
            'name'=>'Valente',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933059',
            'name'=>'Várzea da Roça',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933109',
            'name'=>'Várzea do Poço',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933158',
            'name'=>'Várzea Nova',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933174',
            'name'=>'Varzedo',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933208',
            'name'=>'Vera Cruz',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933257',
            'name'=>'Vereda',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933307',
            'name'=>'Vitória da Conquista',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933406',
            'name'=>'Wagner',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933455',
            'name'=>'Wanderley',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933505',
            'name'=>'Wenceslau Guimarães',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'2933604',
            'name'=>'Xique-Xique',
            'state_id'=> State::where('uf','BA')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100104',
            'name'=>'Abadia dos Dourados',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100203',
            'name'=>'Abaeté',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100302',
            'name'=>'Abre Campo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100401',
            'name'=>'Acaiaca',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100500',
            'name'=>'Açucena',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100609',
            'name'=>'Água Boa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100708',
            'name'=>'Água Comprida',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100807',
            'name'=>'Aguanil',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3100906',
            'name'=>'Águas Formosas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101003',
            'name'=>'Águas Vermelhas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101102',
            'name'=>'Aimorés',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101201',
            'name'=>'Aiuruoca',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101300',
            'name'=>'Alagoa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101409',
            'name'=>'Albertina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101508',
            'name'=>'Além Paraíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101607',
            'name'=>'Alfenas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101631',
            'name'=>'Alfredo Vasconcelos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101706',
            'name'=>'Almenara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101805',
            'name'=>'Alpercata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3101904',
            'name'=>'Alpinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102001',
            'name'=>'Alterosa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102050',
            'name'=>'Alto Caparaó',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102100',
            'name'=>'Alto Rio Doce',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102209',
            'name'=>'Alvarenga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102308',
            'name'=>'Alvinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102407',
            'name'=>'Alvorada de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102506',
            'name'=>'Amparo do Serra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102605',
            'name'=>'Andradas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102704',
            'name'=>'Cachoeira de Pajeú',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102803',
            'name'=>'Andrelândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102852',
            'name'=>'Angelândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3102902',
            'name'=>'Antônio Carlos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103009',
            'name'=>'Antônio Dias',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103108',
            'name'=>'Antônio Prado de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103207',
            'name'=>'Araçaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103306',
            'name'=>'Aracitaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103405',
            'name'=>'Araçuaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103504',
            'name'=>'Araguari',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103603',
            'name'=>'Arantina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103702',
            'name'=>'Araponga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103751',
            'name'=>'Araporã',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103801',
            'name'=>'Arapuá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3103900',
            'name'=>'Araújos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104007',
            'name'=>'Araxá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104106',
            'name'=>'Arceburgo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104205',
            'name'=>'Arcos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104304',
            'name'=>'Areado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104403',
            'name'=>'Argirita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104452',
            'name'=>'Aricanduva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104502',
            'name'=>'Arinos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104601',
            'name'=>'Astolfo Dutra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104700',
            'name'=>'Ataléia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104809',
            'name'=>'Augusto de Lima',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3104908',
            'name'=>'Baependi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105004',
            'name'=>'Baldim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105103',
            'name'=>'Bambuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105202',
            'name'=>'Bandeira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105301',
            'name'=>'Bandeira do Sul',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105400',
            'name'=>'Barão de Cocais',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105509',
            'name'=>'Barão de Monte Alto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105608',
            'name'=>'Barbacena',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105707',
            'name'=>'Barra Longa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3105905',
            'name'=>'Barroso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106002',
            'name'=>'Bela Vista de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106101',
            'name'=>'Belmiro Braga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106200',
            'name'=>'Belo Horizonte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106309',
            'name'=>'Belo Oriente',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106408',
            'name'=>'Belo Vale',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106507',
            'name'=>'Berilo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106606',
            'name'=>'Bertópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106655',
            'name'=>'Berizal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106705',
            'name'=>'Betim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106804',
            'name'=>'Bias Fortes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3106903',
            'name'=>'Bicas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107000',
            'name'=>'Biquinhas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107109',
            'name'=>'Boa Esperança',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107208',
            'name'=>'Bocaina de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107307',
            'name'=>'Bocaiúva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107406',
            'name'=>'Bom Despacho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107505',
            'name'=>'Bom Jardim de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107604',
            'name'=>'Bom Jesus da Penha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107703',
            'name'=>'Bom Jesus do Amparo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107802',
            'name'=>'Bom Jesus do Galho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3107901',
            'name'=>'Bom Repouso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108008',
            'name'=>'Bom Sucesso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108107',
            'name'=>'Bonfim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108206',
            'name'=>'Bonfinópolis de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108255',
            'name'=>'Bonito de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108305',
            'name'=>'Borda da Mata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108404',
            'name'=>'Botelhos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108503',
            'name'=>'Botumirim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108552',
            'name'=>'Brasilândia de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108602',
            'name'=>'Brasília de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108701',
            'name'=>'Brás Pires',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108800',
            'name'=>'Braúnas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3108909',
            'name'=>'Brazópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109006',
            'name'=>'Brumadinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109105',
            'name'=>'Bueno Brandão',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109204',
            'name'=>'Buenópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109253',
            'name'=>'Bugre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109303',
            'name'=>'Buritis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109402',
            'name'=>'Buritizeiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109451',
            'name'=>'Cabeceira Grande',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109501',
            'name'=>'Cabo Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109600',
            'name'=>'Cachoeira da Prata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109709',
            'name'=>'Cachoeira de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109808',
            'name'=>'Cachoeira Dourada',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3109907',
            'name'=>'Caetanópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110004',
            'name'=>'Caeté',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110103',
            'name'=>'Caiana',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110202',
            'name'=>'Cajuri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110301',
            'name'=>'Caldas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110400',
            'name'=>'Camacho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110509',
            'name'=>'Camanducaia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110608',
            'name'=>'Cambuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110707',
            'name'=>'Cambuquira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110806',
            'name'=>'Campanário',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3110905',
            'name'=>'Campanha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111002',
            'name'=>'Campestre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111101',
            'name'=>'Campina Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111150',
            'name'=>'Campo Azul',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111200',
            'name'=>'Campo Belo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111309',
            'name'=>'Campo do Meio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111408',
            'name'=>'Campo Florido',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111507',
            'name'=>'Campos Altos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111606',
            'name'=>'Campos Gerais',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111705',
            'name'=>'Canaã',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111804',
            'name'=>'Canápolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3111903',
            'name'=>'Cana Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112000',
            'name'=>'Candeias',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112059',
            'name'=>'Cantagalo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112109',
            'name'=>'Caparaó',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112208',
            'name'=>'Capela Nova',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112307',
            'name'=>'Capelinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112406',
            'name'=>'Capetinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112505',
            'name'=>'Capim Branco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112604',
            'name'=>'Capinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112653',
            'name'=>'Capitão Andrade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112703',
            'name'=>'Capitão Enéas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112802',
            'name'=>'Capitólio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3112901',
            'name'=>'Caputira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113008',
            'name'=>'Caraí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113107',
            'name'=>'Caranaíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113206',
            'name'=>'Carandaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113305',
            'name'=>'Carangola',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113404',
            'name'=>'Caratinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113503',
            'name'=>'Carbonita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113602',
            'name'=>'Careaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113701',
            'name'=>'Carlos Chagas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113800',
            'name'=>'Carmésia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3113909',
            'name'=>'Carmo da Cachoeira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114006',
            'name'=>'Carmo da Mata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114105',
            'name'=>'Carmo de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114204',
            'name'=>'Carmo do Cajuru',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114303',
            'name'=>'Carmo do Paranaíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114402',
            'name'=>'Carmo do Rio Claro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114501',
            'name'=>'Carmópolis de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114550',
            'name'=>'Carneirinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114600',
            'name'=>'Carrancas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114709',
            'name'=>'Carvalhópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114808',
            'name'=>'Carvalhos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3114907',
            'name'=>'Casa Grande',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115003',
            'name'=>'Cascalho Rico',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115102',
            'name'=>'Cássia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115201',
            'name'=>'Conceição da Barra de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115300',
            'name'=>'Cataguases',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115359',
            'name'=>'Catas Altas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115409',
            'name'=>'Catas Altas da Noruega',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115458',
            'name'=>'Catuji',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115474',
            'name'=>'Catuti',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115508',
            'name'=>'Caxambu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115607',
            'name'=>'Cedro do Abaeté',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115706',
            'name'=>'Central de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115805',
            'name'=>'Centralina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3115904',
            'name'=>'Chácara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116001',
            'name'=>'Chalé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116100',
            'name'=>'Chapada do Norte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116159',
            'name'=>'Chapada Gaúcha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116209',
            'name'=>'Chiador',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116308',
            'name'=>'Cipotânea',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116407',
            'name'=>'Claraval',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116506',
            'name'=>'Claro dos Poções',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116605',
            'name'=>'Cláudio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116704',
            'name'=>'Coimbra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116803',
            'name'=>'Coluna',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3116902',
            'name'=>'Comendador Gomes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117009',
            'name'=>'Comercinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117108',
            'name'=>'Conceição da Aparecida',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117207',
            'name'=>'Conceição das Pedras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117306',
            'name'=>'Conceição das Alagoas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117405',
            'name'=>'Conceição de Ipanema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117504',
            'name'=>'Conceição do Mato Dentro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117603',
            'name'=>'Conceição do Pará',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117702',
            'name'=>'Conceição do Rio Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117801',
            'name'=>'Conceição dos Ouros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117836',
            'name'=>'Cônego Marinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117876',
            'name'=>'Confins',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3117900',
            'name'=>'Congonhal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118007',
            'name'=>'Congonhas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118106',
            'name'=>'Congonhas do Norte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118205',
            'name'=>'Conquista',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118304',
            'name'=>'Conselheiro Lafaiete',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118403',
            'name'=>'Conselheiro Pena',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118502',
            'name'=>'Consolação',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118601',
            'name'=>'Contagem',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118700',
            'name'=>'Coqueiral',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118809',
            'name'=>'Coração de Jesus',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3118908',
            'name'=>'Cordisburgo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119005',
            'name'=>'Cordislândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119104',
            'name'=>'Corinto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119203',
            'name'=>'Coroaci',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119302',
            'name'=>'Coromandel',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119401',
            'name'=>'Coronel Fabriciano',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119500',
            'name'=>'Coronel Murta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119609',
            'name'=>'Coronel Pacheco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119708',
            'name'=>'Coronel Xavier Chaves',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119807',
            'name'=>'Córrego Danta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119906',
            'name'=>'Córrego do Bom Jesus',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3119955',
            'name'=>'Córrego Fundo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120003',
            'name'=>'Córrego Novo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120102',
            'name'=>'Couto de Magalhães de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120151',
            'name'=>'Crisólita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120201',
            'name'=>'Cristais',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120300',
            'name'=>'Cristália',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120409',
            'name'=>'Cristiano Otoni',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120508',
            'name'=>'Cristina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120607',
            'name'=>'Crucilândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120706',
            'name'=>'Cruzeiro da Fortaleza',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120805',
            'name'=>'Cruzília',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120839',
            'name'=>'Cuparaque',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120870',
            'name'=>'Curral de Dentro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3120904',
            'name'=>'Curvelo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121001',
            'name'=>'Datas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121100',
            'name'=>'Delfim Moreira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121209',
            'name'=>'Delfinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121258',
            'name'=>'Delta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121308',
            'name'=>'Descoberto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121407',
            'name'=>'Desterro de Entre Rios',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121506',
            'name'=>'Desterro do Melo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121605',
            'name'=>'Diamantina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121704',
            'name'=>'Diogo de Vasconcelos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121803',
            'name'=>'Dionísio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3121902',
            'name'=>'Divinésia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122009',
            'name'=>'Divino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122108',
            'name'=>'Divino das Laranjeiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122207',
            'name'=>'Divinolândia de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122306',
            'name'=>'Divinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122355',
            'name'=>'Divisa Alegre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122405',
            'name'=>'Divisa Nova',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122454',
            'name'=>'Divisópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122470',
            'name'=>'Dom Bosco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122504',
            'name'=>'Dom Cavati',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122603',
            'name'=>'Dom Joaquim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );

        City::firstOrCreate( [
            'ibge'=>'3122702',
            'name'=>'Dom Silvério',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122801',
            'name'=>'Dom Viçoso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3122900',
            'name'=>'Dona Eusébia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123007',
            'name'=>'Dores de Campos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123106',
            'name'=>'Dores de Guanhães',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123205',
            'name'=>'Dores do Indaiá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123304',
            'name'=>'Dores do Turvo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123403',
            'name'=>'Doresópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123502',
            'name'=>'Douradoquara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123528',
            'name'=>'Durandé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123601',
            'name'=>'Elói Mendes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123700',
            'name'=>'Engenheiro Caldas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123809',
            'name'=>'Engenheiro Navarro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123858',
            'name'=>'Entre Folhas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3123908',
            'name'=>'Entre Rios de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124005',
            'name'=>'Ervália',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124104',
            'name'=>'Esmeraldas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124203',
            'name'=>'Espera Feliz',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124302',
            'name'=>'Espinosa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124401',
            'name'=>'Espírito Santo do Dourado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124500',
            'name'=>'Estiva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124609',
            'name'=>'Estrela Dalva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124708',
            'name'=>'Estrela do Indaiá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124807',
            'name'=>'Estrela do Sul',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3124906',
            'name'=>'Eugenópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125002',
            'name'=>'Ewbank da Câmara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125101',
            'name'=>'Extrema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125200',
            'name'=>'Fama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125309',
            'name'=>'Faria Lemos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125408',
            'name'=>'Felício dos Santos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125507',
            'name'=>'São Gonçalo do Rio Preto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125606',
            'name'=>'Felisburgo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125705',
            'name'=>'Felixlândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125804',
            'name'=>'Fernandes Tourinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125903',
            'name'=>'Ferros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3125952',
            'name'=>'Fervedouro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126000',
            'name'=>'Florestal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126109',
            'name'=>'Formiga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126208',
            'name'=>'Formoso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126307',
            'name'=>'Fortaleza de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126406',
            'name'=>'Fortuna de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126505',
            'name'=>'Francisco Badaró',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126604',
            'name'=>'Francisco Dumont',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126703',
            'name'=>'Francisco Sá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126752',
            'name'=>'Franciscópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126802',
            'name'=>'Frei Gaspar',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126901',
            'name'=>'Frei Inocêncio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3126950',
            'name'=>'Frei Lagonegro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127008',
            'name'=>'Fronteira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127057',
            'name'=>'Fronteira dos Vales',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127073',
            'name'=>'Fruta de Leite',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127107',
            'name'=>'Frutal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127206',
            'name'=>'Funilândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127305',
            'name'=>'Galiléia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127339',
            'name'=>'Gameleiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127354',
            'name'=>'Glaucilândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127370',
            'name'=>'Goiabeira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127388',
            'name'=>'Goianá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127404',
            'name'=>'Gonçalves',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127503',
            'name'=>'Gonzaga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127602',
            'name'=>'Gouveia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127701',
            'name'=>'Governador Valadares',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127800',
            'name'=>'Grão Mogol',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3127909',
            'name'=>'Grupiara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128006',
            'name'=>'Guanhães',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128105',
            'name'=>'Guapé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128204',
            'name'=>'Guaraciaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128253',
            'name'=>'Guaraciama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128303',
            'name'=>'Guaranésia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128402',
            'name'=>'Guarani',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128501',
            'name'=>'Guarará',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128600',
            'name'=>'Guarda-Mor',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128709',
            'name'=>'Guaxupé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128808',
            'name'=>'Guidoval',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3128907',
            'name'=>'Guimarânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129004',
            'name'=>'Guiricema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129103',
            'name'=>'Gurinhatã',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129202',
            'name'=>'Heliodora',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129301',
            'name'=>'Iapu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129400',
            'name'=>'Ibertioga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129509',
            'name'=>'Ibiá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129608',
            'name'=>'Ibiaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129657',
            'name'=>'Ibiracatu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129707',
            'name'=>'Ibiraci',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129806',
            'name'=>'Ibirité',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3129905',
            'name'=>'Ibitiúra de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130002',
            'name'=>'Ibituruna',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130051',
            'name'=>'Icaraí de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130101',
            'name'=>'Igarapé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130200',
            'name'=>'Igaratinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130309',
            'name'=>'Iguatama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130408',
            'name'=>'Ijaci',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130507',
            'name'=>'Ilicínea',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130556',
            'name'=>'Imbé de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130606',
            'name'=>'Inconfidentes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130655',
            'name'=>'Indaiabira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130705',
            'name'=>'Indianópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130804',
            'name'=>'Ingaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3130903',
            'name'=>'Inhapim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131000',
            'name'=>'Inhaúma',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131109',
            'name'=>'Inimutaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131158',
            'name'=>'Ipaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131208',
            'name'=>'Ipanema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131307',
            'name'=>'Ipatinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131406',
            'name'=>'Ipiaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131505',
            'name'=>'Ipuiúna',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131604',
            'name'=>'Iraí de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131703',
            'name'=>'Itabira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131802',
            'name'=>'Itabirinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3131901',
            'name'=>'Itabirito',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132008',
            'name'=>'Itacambira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132107',
            'name'=>'Itacarambi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132206',
            'name'=>'Itaguara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132305',
            'name'=>'Itaipé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132404',
            'name'=>'Itajubá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132503',
            'name'=>'Itamarandiba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132602',
            'name'=>'Itamarati de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132701',
            'name'=>'Itambacuri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132800',
            'name'=>'Itambé do Mato Dentro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3132909',
            'name'=>'Itamogi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133006',
            'name'=>'Itamonte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133105',
            'name'=>'Itanhandu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133204',
            'name'=>'Itanhomi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133303',
            'name'=>'Itaobim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133402',
            'name'=>'Itapagipe',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133501',
            'name'=>'Itapecerica',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133600',
            'name'=>'Itapeva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133709',
            'name'=>'Itatiaiuçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133758',
            'name'=>'Itaú de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133808',
            'name'=>'Itaúna',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3133907',
            'name'=>'Itaverava',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134004',
            'name'=>'Itinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134103',
            'name'=>'Itueta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134202',
            'name'=>'Ituiutaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134301',
            'name'=>'Itumirim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134400',
            'name'=>'Iturama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134509',
            'name'=>'Itutinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134608',
            'name'=>'Jaboticatubas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134707',
            'name'=>'Jacinto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134806',
            'name'=>'Jacuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3134905',
            'name'=>'Jacutinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135001',
            'name'=>'Jaguaraçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135050',
            'name'=>'Jaíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135076',
            'name'=>'Jampruca',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135100',
            'name'=>'Janaúba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135209',
            'name'=>'Januária',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135308',
            'name'=>'Japaraíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135357',
            'name'=>'Japonvar',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135407',
            'name'=>'Jeceaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135456',
            'name'=>'Jenipapo de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135506',
            'name'=>'Jequeri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135605',
            'name'=>'Jequitaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135704',
            'name'=>'Jequitibá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135803',
            'name'=>'Jequitinhonha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3135902',
            'name'=>'Jesuânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136009',
            'name'=>'Joaíma',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136108',
            'name'=>'Joanésia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136207',
            'name'=>'João Monlevade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136306',
            'name'=>'João Pinheiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136405',
            'name'=>'Joaquim Felício',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136504',
            'name'=>'Jordânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136520',
            'name'=>'José Gonçalves de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136553',
            'name'=>'José Raydan',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136579',
            'name'=>'Josenópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136603',
            'name'=>'Nova União',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136652',
            'name'=>'Juatuba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136702',
            'name'=>'Juiz de Fora',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136801',
            'name'=>'Juramento',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136900',
            'name'=>'Juruaia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3136959',
            'name'=>'Juvenília',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137007',
            'name'=>'Ladainha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137106',
            'name'=>'Lagamar',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137205',
            'name'=>'Lagoa da Prata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137304',
            'name'=>'Lagoa dos Patos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137403',
            'name'=>'Lagoa Dourada',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137502',
            'name'=>'Lagoa Formosa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137536',
            'name'=>'Lagoa Grande',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137601',
            'name'=>'Lagoa Santa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137700',
            'name'=>'Lajinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137809',
            'name'=>'Lambari',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3137908',
            'name'=>'Lamim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138005',
            'name'=>'Laranjal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138104',
            'name'=>'Lassance',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138203',
            'name'=>'Lavras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138302',
            'name'=>'Leandro Ferreira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138351',
            'name'=>'Leme do Prado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138401',
            'name'=>'Leopoldina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138500',
            'name'=>'Liberdade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138609',
            'name'=>'Lima Duarte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138625',
            'name'=>'Limeira do Oeste',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138658',
            'name'=>'Lontra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138674',
            'name'=>'Luisburgo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138682',
            'name'=>'Luislândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138708',
            'name'=>'Luminárias',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138807',
            'name'=>'Luz',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3138906',
            'name'=>'Machacalis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139003',
            'name'=>'Machado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139102',
            'name'=>'Madre de Deus de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139201',
            'name'=>'Malacacheta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139250',
            'name'=>'Mamonas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139300',
            'name'=>'Manga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139409',
            'name'=>'Manhuaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139508',
            'name'=>'Manhumirim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139607',
            'name'=>'Mantena',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139706',
            'name'=>'Maravilhas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139805',
            'name'=>'Mar de Espanha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3139904',
            'name'=>'Maria da Fé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140001',
            'name'=>'Mariana',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140100',
            'name'=>'Marilac',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140159',
            'name'=>'Mário Campos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140209',
            'name'=>'Maripá de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140308',
            'name'=>'Marliéria',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140407',
            'name'=>'Marmelópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140506',
            'name'=>'Martinho Campos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140530',
            'name'=>'Martins Soares',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140555',
            'name'=>'Mata Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140605',
            'name'=>'Materlândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140704',
            'name'=>'Mateus Leme',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140803',
            'name'=>'Matias Barbosa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140852',
            'name'=>'Matias Cardoso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3140902',
            'name'=>'Matipó',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141009',
            'name'=>'Mato Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141108',
            'name'=>'Matozinhos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141207',
            'name'=>'Matutina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141306',
            'name'=>'Medeiros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141405',
            'name'=>'Medina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141504',
            'name'=>'Mendes Pimentel',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141603',
            'name'=>'Mercês',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141702',
            'name'=>'Mesquita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141801',
            'name'=>'Minas Novas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3141900',
            'name'=>'Minduri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142007',
            'name'=>'Mirabela',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142106',
            'name'=>'Miradouro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142205',
            'name'=>'Miraí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142254',
            'name'=>'Miravânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142304',
            'name'=>'Moeda',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142403',
            'name'=>'Moema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142502',
            'name'=>'Monjolos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142601',
            'name'=>'Monsenhor Paulo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142700',
            'name'=>'Montalvânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142809',
            'name'=>'Monte Alegre de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3142908',
            'name'=>'Monte Azul',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143005',
            'name'=>'Monte Belo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143104',
            'name'=>'Monte Carmelo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143153',
            'name'=>'Monte Formoso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143203',
            'name'=>'Monte Santo de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143302',
            'name'=>'Montes Claros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143401',
            'name'=>'Monte Sião',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143450',
            'name'=>'Montezuma',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143500',
            'name'=>'Morada Nova de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143609',
            'name'=>'Morro da Garça',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143708',
            'name'=>'Morro do Pilar',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143807',
            'name'=>'Munhoz',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3143906',
            'name'=>'Muriaé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144003',
            'name'=>'Mutum',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144102',
            'name'=>'Muzambinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144201',
            'name'=>'Nacip Raydan',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144300',
            'name'=>'Nanuque',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144359',
            'name'=>'Naque',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144375',
            'name'=>'Natalândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144409',
            'name'=>'Natércia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144508',
            'name'=>'Nazareno',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144607',
            'name'=>'Nepomuceno',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144656',
            'name'=>'Ninheira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144672',
            'name'=>'Nova Belém',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144706',
            'name'=>'Nova Era',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144805',
            'name'=>'Nova Lima',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3144904',
            'name'=>'Nova Módica',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145000',
            'name'=>'Nova Ponte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145059',
            'name'=>'Nova Porteirinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145109',
            'name'=>'Nova Resende',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145208',
            'name'=>'Nova Serrana',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145307',
            'name'=>'Novo Cruzeiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145356',
            'name'=>'Novo Oriente de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145372',
            'name'=>'Novorizonte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145406',
            'name'=>'Olaria',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145455',
            'name'=>'Olhos-D Água',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145505',
            'name'=>'Olímpio Noronha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145604',
            'name'=>'Oliveira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145703',
            'name'=>'Oliveira Fortes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145802',
            'name'=>'Onça de Pitangui',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145851',
            'name'=>'Oratórios',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145877',
            'name'=>'Orizânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3145901',
            'name'=>'Ouro Branco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146008',
            'name'=>'Ouro Fino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146107',
            'name'=>'Ouro Preto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146206',
            'name'=>'Ouro Verde de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146255',
            'name'=>'Padre Carvalho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146305',
            'name'=>'Padre Paraíso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146404',
            'name'=>'Paineiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146503',
            'name'=>'Pains',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146552',
            'name'=>'Pai Pedro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146602',
            'name'=>'Paiva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146701',
            'name'=>'Palma',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146750',
            'name'=>'Palmópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3146909',
            'name'=>'Papagaios',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147006',
            'name'=>'Paracatu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147105',
            'name'=>'Pará de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147204',
            'name'=>'Paraguaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147303',
            'name'=>'Paraisópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147402',
            'name'=>'Paraopeba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147501',
            'name'=>'Passabém',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147600',
            'name'=>'Passa Quatro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147709',
            'name'=>'Passa Tempo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147808',
            'name'=>'Passa-Vinte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147907',
            'name'=>'Passos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3147956',
            'name'=>'Patis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148004',
            'name'=>'Patos de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148103',
            'name'=>'Patrocínio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148202',
            'name'=>'Patrocínio do Muriaé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148301',
            'name'=>'Paula Cândido',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148400',
            'name'=>'Paulistas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148509',
            'name'=>'Pavão',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148608',
            'name'=>'Peçanha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148707',
            'name'=>'Pedra Azul',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148756',
            'name'=>'Pedra Bonita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148806',
            'name'=>'Pedra do Anta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3148905',
            'name'=>'Pedra do Indaiá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149002',
            'name'=>'Pedra Dourada',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149101',
            'name'=>'Pedralva',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149150',
            'name'=>'Pedras de Maria da Cruz',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149200',
            'name'=>'Pedrinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149309',
            'name'=>'Pedro Leopoldo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149408',
            'name'=>'Pedro Teixeira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149507',
            'name'=>'Pequeri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149606',
            'name'=>'Pequi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149705',
            'name'=>'Perdigão',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149804',
            'name'=>'Perdizes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149903',
            'name'=>'Perdões',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3149952',
            'name'=>'Periquito',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150000',
            'name'=>'Pescador',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150109',
            'name'=>'Piau',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150158',
            'name'=>'Piedade de Caratinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150208',
            'name'=>'Piedade de Ponte Nova',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150307',
            'name'=>'Piedade do Rio Grande',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150406',
            'name'=>'Piedade dos Gerais',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150505',
            'name'=>'Pimenta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150539',
            'name'=>'Pingo-D Água',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150570',
            'name'=>'Pintópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150604',
            'name'=>'Piracema',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150703',
            'name'=>'Pirajuba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150802',
            'name'=>'Piranga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3150901',
            'name'=>'Piranguçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151008',
            'name'=>'Piranguinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151107',
            'name'=>'Pirapetinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151206',
            'name'=>'Pirapora',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151305',
            'name'=>'Piraúba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151404',
            'name'=>'Pitangui',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151503',
            'name'=>'Piumhi',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151602',
            'name'=>'Planura',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151701',
            'name'=>'Poço Fundo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151800',
            'name'=>'Poços de Caldas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3151909',
            'name'=>'Pocrane',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152006',
            'name'=>'Pompéu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152105',
            'name'=>'Ponte Nova',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152131',
            'name'=>'Ponto Chique',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152170',
            'name'=>'Ponto dos Volantes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152204',
            'name'=>'Porteirinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152303',
            'name'=>'Porto Firme',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152402',
            'name'=>'Poté',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152501',
            'name'=>'Pouso Alegre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152600',
            'name'=>'Pouso Alto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152709',
            'name'=>'Prados',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152808',
            'name'=>'Prata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3152907',
            'name'=>'Pratápolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153004',
            'name'=>'Pratinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153103',
            'name'=>'Presidente Bernardes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153202',
            'name'=>'Presidente Juscelino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153301',
            'name'=>'Presidente Kubitschek',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153400',
            'name'=>'Presidente Olegário',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153509',
            'name'=>'Alto Jequitibá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153608',
            'name'=>'Prudente de Morais',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153707',
            'name'=>'Quartel Geral',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153806',
            'name'=>'Queluzito',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3153905',
            'name'=>'Raposos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154002',
            'name'=>'Raul Soares',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154101',
            'name'=>'Recreio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154150',
            'name'=>'Reduto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154200',
            'name'=>'Resende Costa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154309',
            'name'=>'Resplendor',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154408',
            'name'=>'Ressaquinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154457',
            'name'=>'Riachinho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154507',
            'name'=>'Riacho dos Machados',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154606',
            'name'=>'Ribeirão das Neves',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154705',
            'name'=>'Ribeirão Vermelho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154804',
            'name'=>'Rio Acima',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3154903',
            'name'=>'Rio Casca',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155009',
            'name'=>'Rio Doce',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155108',
            'name'=>'Rio do Prado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155207',
            'name'=>'Rio Espera',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155306',
            'name'=>'Rio Manso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155405',
            'name'=>'Rio Novo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155504',
            'name'=>'Rio Paranaíba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155603',
            'name'=>'Rio Pardo de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155702',
            'name'=>'Rio Piracicaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155801',
            'name'=>'Rio Pomba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3155900',
            'name'=>'Rio Preto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156007',
            'name'=>'Rio Vermelho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156106',
            'name'=>'Ritápolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156205',
            'name'=>'Rochedo de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156304',
            'name'=>'Rodeiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156403',
            'name'=>'Romaria',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156452',
            'name'=>'Rosário da Limeira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156502',
            'name'=>'Rubelita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156601',
            'name'=>'Rubim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156700',
            'name'=>'Sabará',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156809',
            'name'=>'Sabinópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3156908',
            'name'=>'Sacramento',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157005',
            'name'=>'Salinas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157104',
            'name'=>'Salto da Divisa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157203',
            'name'=>'Santa Bárbara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157252',
            'name'=>'Santa Bárbara do Leste',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157278',
            'name'=>'Santa Bárbara do Monte Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157302',
            'name'=>'Santa Bárbara do Tugúrio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157336',
            'name'=>'Santa Cruz de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157377',
            'name'=>'Santa Cruz de Salinas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157401',
            'name'=>'Santa Cruz do Escalvado',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157500',
            'name'=>'Santa Efigênia de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157609',
            'name'=>'Santa Fé de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157658',
            'name'=>'Santa Helena de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157708',
            'name'=>'Santa Juliana',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157807',
            'name'=>'Santa Luzia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3157906',
            'name'=>'Santa Margarida',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158003',
            'name'=>'Santa Maria de Itabira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158102',
            'name'=>'Santa Maria do Salto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158201',
            'name'=>'Santa Maria do Suaçuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158300',
            'name'=>'Santana da Vargem',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158409',
            'name'=>'Santana de Cataguases',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158508',
            'name'=>'Santana de Pirapama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158607',
            'name'=>'Santana do Deserto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158706',
            'name'=>'Santana do Garambéu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158805',
            'name'=>'Santana do Jacaré',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158904',
            'name'=>'Santana do Manhuaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3158953',
            'name'=>'Santana do Paraíso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159001',
            'name'=>'Santana do Riacho',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159100',
            'name'=>'Santana dos Montes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159209',
            'name'=>'Santa Rita de Caldas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159308',
            'name'=>'Santa Rita de Jacutinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159357',
            'name'=>'Santa Rita de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159407',
            'name'=>'Santa Rita de Ibitipoca',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159506',
            'name'=>'Santa Rita do Itueto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159605',
            'name'=>'Santa Rita do Sapucaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159704',
            'name'=>'Santa Rosa da Serra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159803',
            'name'=>'Santa Vitória',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3159902',
            'name'=>'Santo Antônio do Amparo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160009',
            'name'=>'Santo Antônio do Aventureiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160108',
            'name'=>'Santo Antônio do Grama',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160207',
            'name'=>'Santo Antônio do Itambé',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160306',
            'name'=>'Santo Antônio do Jacinto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160405',
            'name'=>'Santo Antônio do Monte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160454',
            'name'=>'Santo Antônio do Retiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160504',
            'name'=>'Santo Antônio do Rio Abaixo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160603',
            'name'=>'Santo Hipólito',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160702',
            'name'=>'Santos Dumont',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160801',
            'name'=>'São Bento Abade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160900',
            'name'=>'São Brás do Suaçuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3160959',
            'name'=>'São Domingos das Dores',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161007',
            'name'=>'São Domingos do Prata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161056',
            'name'=>'São Félix de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161106',
            'name'=>'São Francisco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161205',
            'name'=>'São Francisco de Paula',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161304',
            'name'=>'São Francisco de Sales',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161403',
            'name'=>'São Francisco do Glória',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161502',
            'name'=>'São Geraldo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161601',
            'name'=>'São Geraldo da Piedade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161650',
            'name'=>'São Geraldo do Baixio',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161700',
            'name'=>'São Gonçalo do Abaeté',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161809',
            'name'=>'São Gonçalo do Pará',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3161908',
            'name'=>'São Gonçalo do Rio Abaixo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162005',
            'name'=>'São Gonçalo do Sapucaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162104',
            'name'=>'São Gotardo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162203',
            'name'=>'São João Batista do Glória',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162252',
            'name'=>'São João da Lagoa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162302',
            'name'=>'São João da Mata',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162401',
            'name'=>'São João da Ponte',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162450',
            'name'=>'São João das Missões',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162500',
            'name'=>'São João del Rei',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162559',
            'name'=>'São João do Manhuaçu',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162575',
            'name'=>'São João do Manteninha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162609',
            'name'=>'São João do Oriente',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162658',
            'name'=>'São João do Pacuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162708',
            'name'=>'São João do Paraíso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162807',
            'name'=>'São João Evangelista',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162906',
            'name'=>'São João Nepomuceno',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162922',
            'name'=>'São Joaquim de Bicas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162948',
            'name'=>'São José da Barra',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3162955',
            'name'=>'São José da Lapa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163003',
            'name'=>'São José da Safira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163102',
            'name'=>'São José da Varginha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163201',
            'name'=>'São José do Alegre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163300',
            'name'=>'São José do Divino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163409',
            'name'=>'São José do Goiabal',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163508',
            'name'=>'São José do Jacuri',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163607',
            'name'=>'São José do Mantimento',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163706',
            'name'=>'São Lourenço',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163805',
            'name'=>'São Miguel do Anta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3163904',
            'name'=>'São Pedro da União',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164001',
            'name'=>'São Pedro dos Ferros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164100',
            'name'=>'São Pedro do Suaçuí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164209',
            'name'=>'São Romão',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164308',
            'name'=>'São Roque de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164407',
            'name'=>'São Sebastião da Bela Vista',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164431',
            'name'=>'São Sebastião da Vargem Alegre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164472',
            'name'=>'São Sebastião do Anta',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164506',
            'name'=>'São Sebastião do Maranhão',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164605',
            'name'=>'São Sebastião do Oeste',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164704',
            'name'=>'São Sebastião do Paraíso',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164803',
            'name'=>'São Sebastião do Rio Preto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3164902',
            'name'=>'São Sebastião do Rio Verde',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165008',
            'name'=>'São Tiago',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165107',
            'name'=>'São Tomás de Aquino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165206',
            'name'=>'São Thomé das Letras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165305',
            'name'=>'São Vicente de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165404',
            'name'=>'Sapucaí-Mirim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165503',
            'name'=>'Sardoá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165537',
            'name'=>'Sarzedo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165552',
            'name'=>'Setubinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165560',
            'name'=>'Sem-Peixe',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165578',
            'name'=>'Senador Amaral',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165602',
            'name'=>'Senador Cortes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165701',
            'name'=>'Senador Firmino',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165800',
            'name'=>'Senador José Bento',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3165909',
            'name'=>'Senador Modestino Gonçalves',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166006',
            'name'=>'Senhora de Oliveira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166105',
            'name'=>'Senhora do Porto',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166204',
            'name'=>'Senhora dos Remédios',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166303',
            'name'=>'Sericita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166402',
            'name'=>'Seritinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166501',
            'name'=>'Serra Azul de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166600',
            'name'=>'Serra da Saudade',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166709',
            'name'=>'Serra dos Aimorés',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166808',
            'name'=>'Serra do Salitre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166907',
            'name'=>'Serrania',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3166956',
            'name'=>'Serranópolis de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167004',
            'name'=>'Serranos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167103',
            'name'=>'Serro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167202',
            'name'=>'Sete Lagoas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167301',
            'name'=>'Silveirânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167400',
            'name'=>'Silvianópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167509',
            'name'=>'Simão Pereira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167608',
            'name'=>'Simonésia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167707',
            'name'=>'Sobrália',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167806',
            'name'=>'Soledade de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3167905',
            'name'=>'Tabuleiro',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168002',
            'name'=>'Taiobeiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168051',
            'name'=>'Taparuba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168101',
            'name'=>'Tapira',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168200',
            'name'=>'Tapiraí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168309',
            'name'=>'Taquaraçu de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168408',
            'name'=>'Tarumirim',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168507',
            'name'=>'Teixeiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168606',
            'name'=>'Teófilo Otoni',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168705',
            'name'=>'Timóteo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168804',
            'name'=>'Tiradentes',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3168903',
            'name'=>'Tiros',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169000',
            'name'=>'Tocantins',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169059',
            'name'=>'Tocos do Moji',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169109',
            'name'=>'Toledo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169208',
            'name'=>'Tombos',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169307',
            'name'=>'Três Corações',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169356',
            'name'=>'Três Marias',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169406',
            'name'=>'Três Pontas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169505',
            'name'=>'Tumiritinga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169604',
            'name'=>'Tupaciguara',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169703',
            'name'=>'Turmalina',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169802',
            'name'=>'Turvolândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3169901',
            'name'=>'Ubá',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170008',
            'name'=>'Ubaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170057',
            'name'=>'Ubaporanga',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170107',
            'name'=>'Uberaba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170206',
            'name'=>'Uberlândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170305',
            'name'=>'Umburatiba',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170404',
            'name'=>'Unaí',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170438',
            'name'=>'União de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170479',
            'name'=>'Uruana de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170503',
            'name'=>'Urucânia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170529',
            'name'=>'Urucuia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170578',
            'name'=>'Vargem Alegre',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170602',
            'name'=>'Vargem Bonita',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170651',
            'name'=>'Vargem Grande do Rio Pardo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170701',
            'name'=>'Varginha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170750',
            'name'=>'Varjão de Minas',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170800',
            'name'=>'Várzea da Palma',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3170909',
            'name'=>'Varzelândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171006',
            'name'=>'Vazante',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171030',
            'name'=>'Verdelândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171071',
            'name'=>'Veredinha',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171105',
            'name'=>'Veríssimo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171154',
            'name'=>'Vermelho Novo',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171204',
            'name'=>'Vespasiano',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171303',
            'name'=>'Viçosa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171402',
            'name'=>'Vieiras',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171501',
            'name'=>'Mathias Lobato',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171600',
            'name'=>'Virgem da Lapa',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171709',
            'name'=>'Virgínia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171808',
            'name'=>'Virginópolis',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3171907',
            'name'=>'Virgolândia',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3172004',
            'name'=>'Visconde do Rio Branco',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3172103',
            'name'=>'Volta Grande',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3172202',
            'name'=>'Wenceslau Braz',
            'state_id'=> State::where('uf','MG')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200102',
            'name'=>'Afonso Cláudio',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200136',
            'name'=>'Águia Branca',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200169',
            'name'=>'Água Doce do Norte',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200201',
            'name'=>'Alegre',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200300',
            'name'=>'Alfredo Chaves',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200359',
            'name'=>'Alto Rio Novo',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200409',
            'name'=>'Anchieta',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200508',
            'name'=>'Apiacá',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200607',
            'name'=>'Aracruz',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200706',
            'name'=>'Atilio Vivacqua',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200805',
            'name'=>'Baixo Guandu',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3200904',
            'name'=>'Barra de São Francisco',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201001',
            'name'=>'Boa Esperança',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201100',
            'name'=>'Bom Jesus do Norte',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201159',
            'name'=>'Brejetuba',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201209',
            'name'=>'Cachoeiro de Itapemirim',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201308',
            'name'=>'Cariacica',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201407',
            'name'=>'Castelo',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201506',
            'name'=>'Colatina',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201605',
            'name'=>'Conceição da Barra',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201704',
            'name'=>'Conceição do Castelo',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201803',
            'name'=>'Divino de São Lourenço',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3201902',
            'name'=>'Domingos Martins',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202009',
            'name'=>'Dores do Rio Preto',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202108',
            'name'=>'Ecoporanga',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202207',
            'name'=>'Fundão',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202256',
            'name'=>'Governador Lindenberg',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202306',
            'name'=>'Guaçuí',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202405',
            'name'=>'Guarapari',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202454',
            'name'=>'Ibatiba',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202504',
            'name'=>'Ibiraçu',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202553',
            'name'=>'Ibitirama',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202603',
            'name'=>'Iconha',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202652',
            'name'=>'Irupi',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202702',
            'name'=>'Itaguaçu',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202801',
            'name'=>'Itapemirim',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3202900',
            'name'=>'Itarana',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203007',
            'name'=>'Iúna',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203056',
            'name'=>'Jaguaré',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203106',
            'name'=>'Jerônimo Monteiro',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203130',
            'name'=>'João Neiva',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203163',
            'name'=>'Laranja da Terra',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203205',
            'name'=>'Linhares',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203304',
            'name'=>'Mantenópolis',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203320',
            'name'=>'Marataízes',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203346',
            'name'=>'Marechal Floriano',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203353',
            'name'=>'Marilândia',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203403',
            'name'=>'Mimoso do Sul',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203502',
            'name'=>'Montanha',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203601',
            'name'=>'Mucurici',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203700',
            'name'=>'Muniz Freire',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203809',
            'name'=>'Muqui',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3203908',
            'name'=>'Nova Venécia',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204005',
            'name'=>'Pancas',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204054',
            'name'=>'Pedro Canário',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204104',
            'name'=>'Pinheiros',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204203',
            'name'=>'Piúma',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204252',
            'name'=>'Ponto Belo',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204302',
            'name'=>'Presidente Kennedy',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204351',
            'name'=>'Rio Bananal',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204401',
            'name'=>'Rio Novo do Sul',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204500',
            'name'=>'Santa Leopoldina',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204559',
            'name'=>'Santa Maria de Jetibá',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204609',
            'name'=>'Santa Teresa',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204658',
            'name'=>'São Domingos do Norte',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204708',
            'name'=>'São Gabriel da Palha',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204807',
            'name'=>'São José do Calçado',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204906',
            'name'=>'São Mateus',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3204955',
            'name'=>'São Roque do Canaã',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205002',
            'name'=>'Serra',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205010',
            'name'=>'Sooretama',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205036',
            'name'=>'Vargem Alta',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205069',
            'name'=>'Venda Nova do Imigrante',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205101',
            'name'=>'Viana',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205150',
            'name'=>'Vila Pavão',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205176',
            'name'=>'Vila Valério',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205200',
            'name'=>'Vila Velha',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3205309',
            'name'=>'Vitória',
            'state_id'=> State::where('uf','ES')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300100',
            'name'=>'Angra dos Reis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300159',
            'name'=>'Aperibé',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300209',
            'name'=>'Araruama',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300225',
            'name'=>'Areal',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300233',
            'name'=>'Armação dos Búzios',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300258',
            'name'=>'Arraial do Cabo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300308',
            'name'=>'Barra do Piraí',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300407',
            'name'=>'Barra Mansa',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300456',
            'name'=>'Belford Roxo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300506',
            'name'=>'Bom Jardim',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300605',
            'name'=>'Bom Jesus do Itabapoana',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300704',
            'name'=>'Cabo Frio',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300803',
            'name'=>'Cachoeiras de Macacu',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300902',
            'name'=>'Cambuci',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300936',
            'name'=>'Carapebus',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3300951',
            'name'=>'Comendador Levy Gasparian',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301009',
            'name'=>'Campos dos Goytacazes',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301108',
            'name'=>'Cantagalo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301157',
            'name'=>'Cardoso Moreira',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301207',
            'name'=>'Carmo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301306',
            'name'=>'Casimiro de Abreu',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301405',
            'name'=>'Conceição de Macabu',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301504',
            'name'=>'Cordeiro',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301603',
            'name'=>'Duas Barras',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301702',
            'name'=>'Duque de Caxias',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301801',
            'name'=>'Engenheiro Paulo de Frontin',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301850',
            'name'=>'Guapimirim',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301876',
            'name'=>'Iguaba Grande',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3301900',
            'name'=>'Itaboraí',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302007',
            'name'=>'Itaguaí',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302056',
            'name'=>'Italva',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302106',
            'name'=>'Itaocara',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302205',
            'name'=>'Itaperuna',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302254',
            'name'=>'Itatiaia',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302270',
            'name'=>'Japeri',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302304',
            'name'=>'Laje do Muriaé',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302403',
            'name'=>'Macaé',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302452',
            'name'=>'Macuco',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302502',
            'name'=>'Magé',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302601',
            'name'=>'Mangaratiba',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302700',
            'name'=>'Maricá',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302809',
            'name'=>'Mendes',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302858',
            'name'=>'Mesquita',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3302908',
            'name'=>'Miguel Pereira',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303005',
            'name'=>'Miracema',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303104',
            'name'=>'Natividade',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303203',
            'name'=>'Nilópolis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303302',
            'name'=>'Niterói',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303401',
            'name'=>'Nova Friburgo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303500',
            'name'=>'Nova Iguaçu',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303609',
            'name'=>'Paracambi',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303708',
            'name'=>'Paraíba do Sul',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303807',
            'name'=>'Paraty',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303856',
            'name'=>'Paty do Alferes',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303906',
            'name'=>'Petrópolis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3303955',
            'name'=>'Pinheiral',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304003',
            'name'=>'Piraí',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304102',
            'name'=>'Porciúncula',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304110',
            'name'=>'Porto Real',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304128',
            'name'=>'Quatis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304144',
            'name'=>'Queimados',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304151',
            'name'=>'Quissamã',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304201',
            'name'=>'Resende',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304300',
            'name'=>'Rio Bonito',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304409',
            'name'=>'Rio Claro',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304508',
            'name'=>'Rio das Flores',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304524',
            'name'=>'Rio das Ostras',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304557',
            'name'=>'Rio de Janeiro',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304607',
            'name'=>'Santa Maria Madalena',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304706',
            'name'=>'Santo Antônio de Pádua',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304755',
            'name'=>'São Francisco de Itabapoana',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304805',
            'name'=>'São Fidélis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3304904',
            'name'=>'São Gonçalo',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305000',
            'name'=>'São João da Barra',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305109',
            'name'=>'São João de Meriti',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305133',
            'name'=>'São José de Ubá',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305158',
            'name'=>'São José do Vale do Rio Preto',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305208',
            'name'=>'São Pedro da Aldeia',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305307',
            'name'=>'São Sebastião do Alto',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305406',
            'name'=>'Sapucaia',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305505',
            'name'=>'Saquarema',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305554',
            'name'=>'Seropédica',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305604',
            'name'=>'Silva Jardim',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305703',
            'name'=>'Sumidouro',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305752',
            'name'=>'Tanguá',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305802',
            'name'=>'Teresópolis',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3305901',
            'name'=>'Trajano de Moraes',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3306008',
            'name'=>'Três Rios',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3306107',
            'name'=>'Valença',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3306156',
            'name'=>'Varre-Sai',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3306206',
            'name'=>'Vassouras',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3306305',
            'name'=>'Volta Redonda',
            'state_id'=> State::where('uf','RJ')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500105',
            'name'=>'Adamantina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500204',
            'name'=>'Adolfo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500303',
            'name'=>'Aguaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500402',
            'name'=>'Águas da Prata',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500501',
            'name'=>'Águas de Lindóia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500550',
            'name'=>'Águas de Santa Bárbara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500600',
            'name'=>'Águas de São Pedro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500709',
            'name'=>'Agudos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500758',
            'name'=>'Alambari',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500808',
            'name'=>'Alfredo Marcondes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3500907',
            'name'=>'Altair',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501004',
            'name'=>'Altinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501103',
            'name'=>'Alto Alegre',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501152',
            'name'=>'Alumínio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501202',
            'name'=>'Álvares Florence',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501301',
            'name'=>'Álvares Machado',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501400',
            'name'=>'Álvaro de Carvalho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501509',
            'name'=>'Alvinlândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501608',
            'name'=>'Americana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501707',
            'name'=>'Américo Brasiliense',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501806',
            'name'=>'Américo de Campos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3501905',
            'name'=>'Amparo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502002',
            'name'=>'Analândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502101',
            'name'=>'Andradina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502200',
            'name'=>'Angatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502309',
            'name'=>'Anhembi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502408',
            'name'=>'Anhumas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502507',
            'name'=>'Aparecida',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502606',
            'name'=>'Aparecida Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502705',
            'name'=>'Apiaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502754',
            'name'=>'Araçariguama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502804',
            'name'=>'Araçatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3502903',
            'name'=>'Araçoiaba da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503000',
            'name'=>'Aramina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503109',
            'name'=>'Arandu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503158',
            'name'=>'Arapeí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503208',
            'name'=>'Araraquara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503307',
            'name'=>'Araras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503356',
            'name'=>'Arco-Íris',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503406',
            'name'=>'Arealva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503505',
            'name'=>'Areias',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503604',
            'name'=>'Areiópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503703',
            'name'=>'Ariranha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503802',
            'name'=>'Artur Nogueira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503901',
            'name'=>'Arujá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3503950',
            'name'=>'Aspásia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504008',
            'name'=>'Assis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504107',
            'name'=>'Atibaia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504206',
            'name'=>'Auriflama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504305',
            'name'=>'Avaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504404',
            'name'=>'Avanhandava',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504503',
            'name'=>'Avaré',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504602',
            'name'=>'Bady Bassitt',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504701',
            'name'=>'Balbinos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504800',
            'name'=>'Bálsamo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3504909',
            'name'=>'Bananal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505005',
            'name'=>'Barão de Antonina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505104',
            'name'=>'Barbosa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505203',
            'name'=>'Bariri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505302',
            'name'=>'Barra Bonita',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505351',
            'name'=>'Barra do Chapéu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505401',
            'name'=>'Barra do Turvo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505500',
            'name'=>'Barretos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505609',
            'name'=>'Barrinha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505708',
            'name'=>'Barueri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505807',
            'name'=>'Bastos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3505906',
            'name'=>'Batatais',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506003',
            'name'=>'Bauru',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506102',
            'name'=>'Bebedouro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506201',
            'name'=>'Bento de Abreu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506300',
            'name'=>'Bernardino de Campos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506359',
            'name'=>'Bertioga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506409',
            'name'=>'Bilac',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506508',
            'name'=>'Birigui',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506607',
            'name'=>'Biritiba-Mirim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506706',
            'name'=>'Boa Esperança do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506805',
            'name'=>'Bocaina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3506904',
            'name'=>'Bofete',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507001',
            'name'=>'Boituva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507100',
            'name'=>'Bom Jesus dos Perdões',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507159',
            'name'=>'Bom Sucesso de Itararé',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507209',
            'name'=>'Borá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507308',
            'name'=>'Boracéia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507407',
            'name'=>'Borborema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507456',
            'name'=>'Borebi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507506',
            'name'=>'Botucatu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507605',
            'name'=>'Bragança Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507704',
            'name'=>'Braúna',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507753',
            'name'=>'Brejo Alegre',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507803',
            'name'=>'Brodowski',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3507902',
            'name'=>'Brotas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508009',
            'name'=>'Buri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508108',
            'name'=>'Buritama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508207',
            'name'=>'Buritizal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508306',
            'name'=>'Cabrália Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508405',
            'name'=>'Cabreúva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508504',
            'name'=>'Caçapava',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508603',
            'name'=>'Cachoeira Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508702',
            'name'=>'Caconde',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508801',
            'name'=>'Cafelândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3508900',
            'name'=>'Caiabu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509007',
            'name'=>'Caieiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509106',
            'name'=>'Caiuá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509205',
            'name'=>'Cajamar',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509254',
            'name'=>'Cajati',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509304',
            'name'=>'Cajobi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509403',
            'name'=>'Cajuru',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509452',
            'name'=>'Campina do Monte Alegre',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509502',
            'name'=>'Campinas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509601',
            'name'=>'Campo Limpo Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509700',
            'name'=>'Campos do Jordão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509809',
            'name'=>'Campos Novos Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509908',
            'name'=>'Cananéia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3509957',
            'name'=>'Canas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510005',
            'name'=>'Cândido Mota',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510104',
            'name'=>'Cândido Rodrigues',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510153',
            'name'=>'Canitar',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510203',
            'name'=>'Capão Bonito',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510302',
            'name'=>'Capela do Alto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510401',
            'name'=>'Capivari',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510500',
            'name'=>'Caraguatatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510609',
            'name'=>'Carapicuíba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510708',
            'name'=>'Cardoso',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510807',
            'name'=>'Casa Branca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3510906',
            'name'=>'Cássia dos Coqueiros',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511003',
            'name'=>'Castilho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511102',
            'name'=>'Catanduva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511201',
            'name'=>'Catiguá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511300',
            'name'=>'Cedral',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511409',
            'name'=>'Cerqueira César',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511508',
            'name'=>'Cerquilho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511607',
            'name'=>'Cesário Lange',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511706',
            'name'=>'Charqueada',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3511904',
            'name'=>'Clementina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512001',
            'name'=>'Colina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512100',
            'name'=>'Colômbia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512209',
            'name'=>'Conchal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512308',
            'name'=>'Conchas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512407',
            'name'=>'Cordeirópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512506',
            'name'=>'Coroados',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512605',
            'name'=>'Coronel Macedo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512704',
            'name'=>'Corumbataí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512803',
            'name'=>'Cosmópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3512902',
            'name'=>'Cosmorama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513009',
            'name'=>'Cotia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513108',
            'name'=>'Cravinhos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513207',
            'name'=>'Cristais Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513306',
            'name'=>'Cruzália',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513405',
            'name'=>'Cruzeiro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513504',
            'name'=>'Cubatão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513603',
            'name'=>'Cunha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513702',
            'name'=>'Descalvado',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513801',
            'name'=>'Diadema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513850',
            'name'=>'Dirce Reis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3513900',
            'name'=>'Divinolândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514007',
            'name'=>'Dobrada',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514106',
            'name'=>'Dois Córregos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514205',
            'name'=>'Dolcinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514304',
            'name'=>'Dourado',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514403',
            'name'=>'Dracena',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514502',
            'name'=>'Duartina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514601',
            'name'=>'Dumont',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514700',
            'name'=>'Echaporã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514809',
            'name'=>'Eldorado',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514908',
            'name'=>'Elias Fausto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514924',
            'name'=>'Elisiário',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3514957',
            'name'=>'Embaúba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515004',
            'name'=>'Embu das Artes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515103',
            'name'=>'Embu-Guaçu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515129',
            'name'=>'Emilianópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515152',
            'name'=>'Engenheiro Coelho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515186',
            'name'=>'Espírito Santo do Pinhal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515194',
            'name'=>'Espírito Santo do Turvo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515202',
            'name'=>'Estrela Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515301',
            'name'=>'Estrela do Norte',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515350',
            'name'=>'Euclides da Cunha Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515400',
            'name'=>'Fartura',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515509',
            'name'=>'Fernandópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515608',
            'name'=>'Fernando Prestes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515657',
            'name'=>'Fernão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515707',
            'name'=>'Ferraz de Vasconcelos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515806',
            'name'=>'Flora Rica',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3515905',
            'name'=>'Floreal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516002',
            'name'=>'Flórida Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516101',
            'name'=>'Florínia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516200',
            'name'=>'Franca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516309',
            'name'=>'Francisco Morato',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516408',
            'name'=>'Franco da Rocha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516507',
            'name'=>'Gabriel Monteiro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516606',
            'name'=>'Gália',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516705',
            'name'=>'Garça',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516804',
            'name'=>'Gastão Vidigal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516853',
            'name'=>'Gavião Peixoto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3516903',
            'name'=>'General Salgado',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517000',
            'name'=>'Getulina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517109',
            'name'=>'Glicério',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517208',
            'name'=>'Guaiçara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517307',
            'name'=>'Guaimbê',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517406',
            'name'=>'Guaíra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517505',
            'name'=>'Guapiaçu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517604',
            'name'=>'Guapiara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517703',
            'name'=>'Guará',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517802',
            'name'=>'Guaraçaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3517901',
            'name'=>'Guaraci',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518008',
            'name'=>'Guarani Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518107',
            'name'=>'Guarantã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518206',
            'name'=>'Guararapes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518305',
            'name'=>'Guararema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518404',
            'name'=>'Guaratinguetá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518503',
            'name'=>'Guareí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518602',
            'name'=>'Guariba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518701',
            'name'=>'Guarujá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518800',
            'name'=>'Guarulhos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518859',
            'name'=>'Guatapará',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3518909',
            'name'=>'Guzolândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519006',
            'name'=>'Herculândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519055',
            'name'=>'Holambra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519071',
            'name'=>'Hortolândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519105',
            'name'=>'Iacanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519204',
            'name'=>'Iacri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519253',
            'name'=>'Iaras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519303',
            'name'=>'Ibaté',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519402',
            'name'=>'Ibirá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519501',
            'name'=>'Ibirarema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519600',
            'name'=>'Ibitinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519709',
            'name'=>'Ibiúna',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519808',
            'name'=>'Icém',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3519907',
            'name'=>'Iepê',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520004',
            'name'=>'Igaraçu do Tietê',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );

        City::firstOrCreate( [
            'ibge'=>'3520103',
            'name'=>'Igarapava',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520202',
            'name'=>'Igaratá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520301',
            'name'=>'Iguape',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520400',
            'name'=>'Ilhabela',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520426',
            'name'=>'Ilha Comprida',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520442',
            'name'=>'Ilha Solteira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520509',
            'name'=>'Indaiatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520608',
            'name'=>'Indiana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520707',
            'name'=>'Indiaporã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520806',
            'name'=>'Inúbia Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3520905',
            'name'=>'Ipaussu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521002',
            'name'=>'Iperó',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521101',
            'name'=>'Ipeúna',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521150',
            'name'=>'Ipiguá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521200',
            'name'=>'Iporanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521309',
            'name'=>'Ipuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521408',
            'name'=>'Iracemápolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521507',
            'name'=>'Irapuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521606',
            'name'=>'Irapuru',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521705',
            'name'=>'Itaberá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521804',
            'name'=>'Itaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3521903',
            'name'=>'Itajobi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522000',
            'name'=>'Itaju',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522109',
            'name'=>'Itanhaém',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522158',
            'name'=>'Itaóca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522208',
            'name'=>'Itapecerica da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522307',
            'name'=>'Itapetininga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522406',
            'name'=>'Itapeva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522505',
            'name'=>'Itapevi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522604',
            'name'=>'Itapira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522653',
            'name'=>'Itapirapuã Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522703',
            'name'=>'Itápolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522802',
            'name'=>'Itaporanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3522901',
            'name'=>'Itapuí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523008',
            'name'=>'Itapura',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523107',
            'name'=>'Itaquaquecetuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523206',
            'name'=>'Itararé',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523305',
            'name'=>'Itariri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523404',
            'name'=>'Itatiba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523503',
            'name'=>'Itatinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523602',
            'name'=>'Itirapina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523701',
            'name'=>'Itirapuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523800',
            'name'=>'Itobi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3523909',
            'name'=>'Itu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524006',
            'name'=>'Itupeva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524105',
            'name'=>'Ituverava',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524204',
            'name'=>'Jaborandi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524303',
            'name'=>'Jaboticabal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524402',
            'name'=>'Jacareí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524501',
            'name'=>'Jaci',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524600',
            'name'=>'Jacupiranga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524709',
            'name'=>'Jaguariúna',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524808',
            'name'=>'Jales',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3524907',
            'name'=>'Jambeiro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525003',
            'name'=>'Jandira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525102',
            'name'=>'Jardinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525201',
            'name'=>'Jarinu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525300',
            'name'=>'Jaú',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525409',
            'name'=>'Jeriquara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525508',
            'name'=>'Joanópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525607',
            'name'=>'João Ramalho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525706',
            'name'=>'José Bonifácio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525805',
            'name'=>'Júlio Mesquita',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525854',
            'name'=>'Jumirim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3525904',
            'name'=>'Jundiaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526001',
            'name'=>'Junqueirópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526100',
            'name'=>'Juquiá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526209',
            'name'=>'Juquitiba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526308',
            'name'=>'Lagoinha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526407',
            'name'=>'Laranjal Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526506',
            'name'=>'Lavínia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526605',
            'name'=>'Lavrinhas',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526704',
            'name'=>'Leme',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526803',
            'name'=>'Lençóis Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3526902',
            'name'=>'Limeira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527009',
            'name'=>'Lindóia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527108',
            'name'=>'Lins',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527207',
            'name'=>'Lorena',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527256',
            'name'=>'Lourdes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527306',
            'name'=>'Louveira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527405',
            'name'=>'Lucélia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527504',
            'name'=>'Lucianópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527603',
            'name'=>'Luís Antônio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527702',
            'name'=>'Luiziânia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527801',
            'name'=>'Lupércio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3527900',
            'name'=>'Lutécia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528007',
            'name'=>'Macatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528106',
            'name'=>'Macaubal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528205',
            'name'=>'Macedônia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528304',
            'name'=>'Magda',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528403',
            'name'=>'Mairinque',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528502',
            'name'=>'Mairiporã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528601',
            'name'=>'Manduri',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528700',
            'name'=>'Marabá Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528809',
            'name'=>'Maracaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528858',
            'name'=>'Marapoama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3528908',
            'name'=>'Mariápolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529005',
            'name'=>'Marília',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529104',
            'name'=>'Marinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529203',
            'name'=>'Martinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529302',
            'name'=>'Matão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529401',
            'name'=>'Mauá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529500',
            'name'=>'Mendonça',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529609',
            'name'=>'Meridiano',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529658',
            'name'=>'Mesópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529708',
            'name'=>'Miguelópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529807',
            'name'=>'Mineiros do Tietê',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3529906',
            'name'=>'Miracatu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530003',
            'name'=>'Mira Estrela',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530102',
            'name'=>'Mirandópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530201',
            'name'=>'Mirante do Paranapanema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530300',
            'name'=>'Mirassol',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530409',
            'name'=>'Mirassolândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530508',
            'name'=>'Mococa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530607',
            'name'=>'Mogi das Cruzes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530706',
            'name'=>'Mogi Guaçu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530805',
            'name'=>'Moji Mirim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3530904',
            'name'=>'Mombuca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531001',
            'name'=>'Monções',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531100',
            'name'=>'Mongaguá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531209',
            'name'=>'Monte Alegre do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531308',
            'name'=>'Monte Alto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531407',
            'name'=>'Monte Aprazível',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531506',
            'name'=>'Monte Azul Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531605',
            'name'=>'Monte Castelo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531704',
            'name'=>'Monteiro Lobato',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531803',
            'name'=>'Monte Mor',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3531902',
            'name'=>'Morro Agudo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532009',
            'name'=>'Morungaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532058',
            'name'=>'Motuca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532108',
            'name'=>'Murutinga do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532157',
            'name'=>'Nantes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532207',
            'name'=>'Narandiba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532306',
            'name'=>'Natividade da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532405',
            'name'=>'Nazaré Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532504',
            'name'=>'Neves Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532603',
            'name'=>'Nhandeara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532702',
            'name'=>'Nipoã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532801',
            'name'=>'Nova Aliança',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532827',
            'name'=>'Nova Campina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532843',
            'name'=>'Nova Canaã Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532868',
            'name'=>'Nova Castilho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3532900',
            'name'=>'Nova Europa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533007',
            'name'=>'Nova Granada',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533106',
            'name'=>'Nova Guataporanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533205',
            'name'=>'Nova Independência',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533254',
            'name'=>'Novais',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533304',
            'name'=>'Nova Luzitânia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533403',
            'name'=>'Nova Odessa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533502',
            'name'=>'Novo Horizonte',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533601',
            'name'=>'Nuporanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533700',
            'name'=>'Ocauçu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533809',
            'name'=>'Óleo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3533908',
            'name'=>'Olímpia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534005',
            'name'=>'Onda Verde',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534104',
            'name'=>'Oriente',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534203',
            'name'=>'Orindiúva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534302',
            'name'=>'Orlândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534401',
            'name'=>'Osasco',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534500',
            'name'=>'Oscar Bressane',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534609',
            'name'=>'Osvaldo Cruz',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534708',
            'name'=>'Ourinhos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534757',
            'name'=>'Ouroeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534807',
            'name'=>'Ouro Verde',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3534906',
            'name'=>'Pacaembu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535002',
            'name'=>'Palestina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535101',
            'name'=>'Palmares Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535200',
            'name'=>'Palmeira Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535309',
            'name'=>'Palmital',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535408',
            'name'=>'Panorama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535507',
            'name'=>'Paraguaçu Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535606',
            'name'=>'Paraibuna',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535705',
            'name'=>'Paraíso',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535804',
            'name'=>'Paranapanema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3535903',
            'name'=>'Paranapuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536000',
            'name'=>'Parapuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536109',
            'name'=>'Pardinho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536208',
            'name'=>'Pariquera-Açu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536257',
            'name'=>'Parisi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536307',
            'name'=>'Patrocínio Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536406',
            'name'=>'Paulicéia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536505',
            'name'=>'Paulínia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536570',
            'name'=>'Paulistânia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536604',
            'name'=>'Paulo de Faria',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536703',
            'name'=>'Pederneiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536802',
            'name'=>'Pedra Bela',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3536901',
            'name'=>'Pedranópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537008',
            'name'=>'Pedregulho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537107',
            'name'=>'Pedreira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537156',
            'name'=>'Pedrinhas Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537206',
            'name'=>'Pedro de Toledo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537305',
            'name'=>'Penápolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537404',
            'name'=>'Pereira Barreto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537503',
            'name'=>'Pereiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537602',
            'name'=>'Peruíbe',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537701',
            'name'=>'Piacatu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537800',
            'name'=>'Piedade',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3537909',
            'name'=>'Pilar do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538006',
            'name'=>'Pindamonhangaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538105',
            'name'=>'Pindorama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538204',
            'name'=>'Pinhalzinho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538303',
            'name'=>'Piquerobi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538501',
            'name'=>'Piquete',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538600',
            'name'=>'Piracaia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538709',
            'name'=>'Piracicaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538808',
            'name'=>'Piraju',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3538907',
            'name'=>'Pirajuí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539004',
            'name'=>'Pirangi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539103',
            'name'=>'Pirapora do Bom Jesus',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539202',
            'name'=>'Pirapozinho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539301',
            'name'=>'Pirassununga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539400',
            'name'=>'Piratininga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539509',
            'name'=>'Pitangueiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539608',
            'name'=>'Planalto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539707',
            'name'=>'Platina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539806',
            'name'=>'Poá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3539905',
            'name'=>'Poloni',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540002',
            'name'=>'Pompéia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540101',
            'name'=>'Pongaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540200',
            'name'=>'Pontal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540259',
            'name'=>'Pontalinda',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540309',
            'name'=>'Pontes Gestal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540408',
            'name'=>'Populina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540507',
            'name'=>'Porangaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540606',
            'name'=>'Porto Feliz',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540705',
            'name'=>'Porto Ferreira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540754',
            'name'=>'Potim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540804',
            'name'=>'Potirendaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540853',
            'name'=>'Pracinha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3540903',
            'name'=>'Pradópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541000',
            'name'=>'Praia Grande',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541059',
            'name'=>'Pratânia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541109',
            'name'=>'Presidente Alves',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541208',
            'name'=>'Presidente Bernardes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541307',
            'name'=>'Presidente Epitácio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541406',
            'name'=>'Presidente Prudente',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541505',
            'name'=>'Presidente Venceslau',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541604',
            'name'=>'Promissão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541653',
            'name'=>'Quadra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541703',
            'name'=>'Quatá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541802',
            'name'=>'Queiroz',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3541901',
            'name'=>'Queluz',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542008',
            'name'=>'Quintana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542107',
            'name'=>'Rafard',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542206',
            'name'=>'Rancharia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542305',
            'name'=>'Redenção da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542404',
            'name'=>'Regente Feijó',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542503',
            'name'=>'Reginópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542602',
            'name'=>'Registro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542701',
            'name'=>'Restinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542800',
            'name'=>'Ribeira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3542909',
            'name'=>'Ribeirão Bonito',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543006',
            'name'=>'Ribeirão Branco',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543105',
            'name'=>'Ribeirão Corrente',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543204',
            'name'=>'Ribeirão do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543238',
            'name'=>'Ribeirão dos Índios',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543253',
            'name'=>'Ribeirão Grande',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543303',
            'name'=>'Ribeirão Pires',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543402',
            'name'=>'Ribeirão Preto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543501',
            'name'=>'Riversul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543600',
            'name'=>'Rifaina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543709',
            'name'=>'Rincão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543808',
            'name'=>'Rinópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3543907',
            'name'=>'Rio Claro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544004',
            'name'=>'Rio das Pedras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544103',
            'name'=>'Rio Grande da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544202',
            'name'=>'Riolândia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544251',
            'name'=>'Rosana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544301',
            'name'=>'Roseira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544400',
            'name'=>'Rubiácea',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544509',
            'name'=>'Rubinéia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544608',
            'name'=>'Sabino',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544707',
            'name'=>'Sagres',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544806',
            'name'=>'Sales',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3544905',
            'name'=>'Sales Oliveira',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545001',
            'name'=>'Salesópolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545100',
            'name'=>'Salmourão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545159',
            'name'=>'Saltinho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545209',
            'name'=>'Salto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545308',
            'name'=>'Salto de Pirapora',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545407',
            'name'=>'Salto Grande',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545506',
            'name'=>'Sandovalina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545605',
            'name'=>'Santa Adélia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545704',
            'name'=>'Santa Albertina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3545803',
            'name'=>'Santa Bárbara Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546009',
            'name'=>'Santa Branca',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546108',
            'name'=>'Santa Clara Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546207',
            'name'=>'Santa Cruz da Conceição',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546256',
            'name'=>'Santa Cruz da Esperança',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546306',
            'name'=>'Santa Cruz das Palmeiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546405',
            'name'=>'Santa Cruz do Rio Pardo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546504',
            'name'=>'Santa Ernestina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546603',
            'name'=>'Santa Fé do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546702',
            'name'=>'Santa Gertrudes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546801',
            'name'=>'Santa Isabel',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3546900',
            'name'=>'Santa Lúcia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547007',
            'name'=>'Santa Maria da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547106',
            'name'=>'Santa Mercedes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547205',
            'name'=>'Santana da Ponte Pensa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547304',
            'name'=>'Santana de Parnaíba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547403',
            'name'=>'Santa Rita Do Oeste',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547502',
            'name'=>'Santa Rita do Passa Quatro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547601',
            'name'=>'Santa Rosa de Viterbo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547650',
            'name'=>'Santa Salete',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547700',
            'name'=>'Santo Anastácio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547809',
            'name'=>'Santo André',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3547908',
            'name'=>'Santo Antônio da Alegria',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548005',
            'name'=>'Santo Antônio de Posse',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548054',
            'name'=>'Santo Antônio do Aracanguá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548104',
            'name'=>'Santo Antônio do Jardim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548203',
            'name'=>'Santo Antônio do Pinhal',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548302',
            'name'=>'Santo Expedito',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548401',
            'name'=>'Santópolis do Aguapeí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548500',
            'name'=>'Santos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548609',
            'name'=>'São Bento do Sapucaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548708',
            'name'=>'São Bernardo do Campo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548807',
            'name'=>'São Caetano do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3548906',
            'name'=>'São Carlos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549003',
            'name'=>'São Francisco',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549102',
            'name'=>'São João da Boa Vista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549201',
            'name'=>'São João das Duas Pontes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549250',
            'name'=>'São João de Iracema',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549300',
            'name'=>'São João do Pau D Alho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549409',
            'name'=>'São Joaquim da Barra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549508',
            'name'=>'São José da Bela Vista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549607',
            'name'=>'São José do Barreiro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549706',
            'name'=>'São José do Rio Pardo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549805',
            'name'=>'São José do Rio Preto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549904',
            'name'=>'São José dos Campos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3549953',
            'name'=>'São Lourenço da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550001',
            'name'=>'São Luís do Paraitinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550100',
            'name'=>'São Manuel',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550209',
            'name'=>'São Miguel Arcanjo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550308',
            'name'=>'São Paulo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550407',
            'name'=>'São Pedro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550506',
            'name'=>'São Pedro do Turvo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550605',
            'name'=>'São Roque',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550704',
            'name'=>'São Sebastião',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550803',
            'name'=>'São Sebastião da Grama',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3550902',
            'name'=>'São Simão',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551009',
            'name'=>'São Vicente',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551108',
            'name'=>'Sarapuí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551207',
            'name'=>'Sarutaiá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551306',
            'name'=>'Sebastianópolis do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551405',
            'name'=>'Serra Azul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551504',
            'name'=>'Serrana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551603',
            'name'=>'Serra Negra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551702',
            'name'=>'Sertãozinho',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551801',
            'name'=>'Sete Barras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3551900',
            'name'=>'Severínia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552007',
            'name'=>'Silveiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552106',
            'name'=>'Socorro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552205',
            'name'=>'Sorocaba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552304',
            'name'=>'Sud Mennucci',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552403',
            'name'=>'Sumaré',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552502',
            'name'=>'Suzano',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552551',
            'name'=>'Suzanápolis',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552601',
            'name'=>'Tabapuã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552700',
            'name'=>'Tabatinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552809',
            'name'=>'Taboão da Serra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3552908',
            'name'=>'Taciba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553005',
            'name'=>'Taguaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553104',
            'name'=>'Taiaçu',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553203',
            'name'=>'Taiúva',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553302',
            'name'=>'Tambaú',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553401',
            'name'=>'Tanabi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553500',
            'name'=>'Tapiraí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553609',
            'name'=>'Tapiratiba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553658',
            'name'=>'Taquaral',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553708',
            'name'=>'Taquaritinga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553807',
            'name'=>'Taquarituba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553856',
            'name'=>'Taquarivaí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553906',
            'name'=>'Tarabai',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3553955',
            'name'=>'Tarumã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554003',
            'name'=>'Tatuí',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554102',
            'name'=>'Taubaté',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554201',
            'name'=>'Tejupá',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554300',
            'name'=>'Teodoro Sampaio',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554409',
            'name'=>'Terra Roxa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554508',
            'name'=>'Tietê',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554607',
            'name'=>'Timburi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554656',
            'name'=>'Torre de Pedra',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554706',
            'name'=>'Torrinha',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554755',
            'name'=>'Trabiju',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554805',
            'name'=>'Tremembé',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554904',
            'name'=>'Três Fronteiras',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3554953',
            'name'=>'Tuiuti',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555000',
            'name'=>'Tupã',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555109',
            'name'=>'Tupi Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555208',
            'name'=>'Turiúba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555307',
            'name'=>'Turmalina',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555356',
            'name'=>'Ubarana',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555406',
            'name'=>'Ubatuba',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555505',
            'name'=>'Ubirajara',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555604',
            'name'=>'Uchoa',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555703',
            'name'=>'União Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555802',
            'name'=>'Urânia',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3555901',
            'name'=>'Uru',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556008',
            'name'=>'Urupês',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556107',
            'name'=>'Valentim Gentil',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556206',
            'name'=>'Valinhos',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556305',
            'name'=>'Valparaíso',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556354',
            'name'=>'Vargem',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556404',
            'name'=>'Vargem Grande do Sul',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556453',
            'name'=>'Vargem Grande Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556503',
            'name'=>'Várzea Paulista',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556602',
            'name'=>'Vera Cruz',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556701',
            'name'=>'Vinhedo',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556800',
            'name'=>'Viradouro',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556909',
            'name'=>'Vista Alegre do Alto',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3556958',
            'name'=>'Vitória Brasil',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3557006',
            'name'=>'Votorantim',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3557105',
            'name'=>'Votuporanga',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3557154',
            'name'=>'Zacarias',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3557204',
            'name'=>'Chavantes',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'3557303',
            'name'=>'Estiva Gerbi',
            'state_id'=> State::where('uf','SP')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100103',
            'name'=>'Abatiá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100202',
            'name'=>'Adrianópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100301',
            'name'=>'Agudos do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100400',
            'name'=>'Almirante Tamandaré',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100459',
            'name'=>'Altamira do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100509',
            'name'=>'Altônia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100608',
            'name'=>'Alto Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100707',
            'name'=>'Alto Piquiri',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100806',
            'name'=>'Alvorada do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4100905',
            'name'=>'Amaporã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101002',
            'name'=>'Ampére',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101051',
            'name'=>'Anahy',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101101',
            'name'=>'Andirá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101150',
            'name'=>'Ângulo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101200',
            'name'=>'Antonina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101309',
            'name'=>'Antônio Olinto',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101408',
            'name'=>'Apucarana',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101507',
            'name'=>'Arapongas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101606',
            'name'=>'Arapoti',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101655',
            'name'=>'Arapuã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101705',
            'name'=>'Araruna',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101804',
            'name'=>'Araucária',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101853',
            'name'=>'Ariranha do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4101903',
            'name'=>'Assaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102000',
            'name'=>'Assis Chateaubriand',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102109',
            'name'=>'Astorga',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102208',
            'name'=>'Atalaia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102307',
            'name'=>'Balsa Nova',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102406',
            'name'=>'Bandeirantes',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102505',
            'name'=>'Barbosa Ferraz',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102604',
            'name'=>'Barracão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102703',
            'name'=>'Barra do Jacaré',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102752',
            'name'=>'Bela Vista da Caroba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102802',
            'name'=>'Bela Vista do Paraíso',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4102901',
            'name'=>'Bituruna',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103008',
            'name'=>'Boa Esperança',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103024',
            'name'=>'Boa Esperança do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103040',
            'name'=>'Boa Ventura de São Roque',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103057',
            'name'=>'Boa Vista da Aparecida',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103107',
            'name'=>'Bocaiúva do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103156',
            'name'=>'Bom Jesus do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103206',
            'name'=>'Bom Sucesso',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103222',
            'name'=>'Bom Sucesso do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103305',
            'name'=>'Borrazópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103354',
            'name'=>'Braganey',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103370',
            'name'=>'Brasilândia do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103404',
            'name'=>'Cafeara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103453',
            'name'=>'Cafelândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103479',
            'name'=>'Cafezal do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103503',
            'name'=>'Califórnia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103602',
            'name'=>'Cambará',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103701',
            'name'=>'Cambé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103800',
            'name'=>'Cambira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103909',
            'name'=>'Campina da Lagoa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4103958',
            'name'=>'Campina do Simão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104006',
            'name'=>'Campina Grande do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104055',
            'name'=>'Campo Bonito',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104105',
            'name'=>'Campo do Tenente',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104204',
            'name'=>'Campo Largo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104253',
            'name'=>'Campo Magro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104303',
            'name'=>'Campo Mourão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104402',
            'name'=>'Cândido de Abreu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104428',
            'name'=>'Candói',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104451',
            'name'=>'Cantagalo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104501',
            'name'=>'Capanema',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104600',
            'name'=>'Capitão Leônidas Marques',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104659',
            'name'=>'Carambeí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104709',
            'name'=>'Carlópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104808',
            'name'=>'Cascavel',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4104907',
            'name'=>'Castro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105003',
            'name'=>'Catanduvas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105102',
            'name'=>'Centenário do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105201',
            'name'=>'Cerro Azul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105300',
            'name'=>'Céu Azul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105409',
            'name'=>'Chopinzinho',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105508',
            'name'=>'Cianorte',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105607',
            'name'=>'Cidade Gaúcha',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105706',
            'name'=>'Clevelândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105805',
            'name'=>'Colombo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4105904',
            'name'=>'Colorado',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106001',
            'name'=>'Congonhinhas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106100',
            'name'=>'Conselheiro Mairinck',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106209',
            'name'=>'Contenda',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106308',
            'name'=>'Corbélia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106407',
            'name'=>'Cornélio Procópio',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106456',
            'name'=>'Coronel Domingos Soares',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106506',
            'name'=>'Coronel Vivida',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106555',
            'name'=>'Corumbataí do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106571',
            'name'=>'Cruzeiro do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106605',
            'name'=>'Cruzeiro do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106704',
            'name'=>'Cruzeiro do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106803',
            'name'=>'Cruz Machado',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106852',
            'name'=>'Cruzmaltina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4106902',
            'name'=>'Curitiba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107009',
            'name'=>'Curiúva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107108',
            'name'=>'Diamante do Norte',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107124',
            'name'=>'Diamante do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107157',
            'name'=>'Diamante Do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107207',
            'name'=>'Dois Vizinhos',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107256',
            'name'=>'Douradina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107306',
            'name'=>'Doutor Camargo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107405',
            'name'=>'Enéas Marques',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107504',
            'name'=>'Engenheiro Beltrão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107520',
            'name'=>'Esperança Nova',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107538',
            'name'=>'Entre Rios do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107546',
            'name'=>'Espigão Alto do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107553',
            'name'=>'Farol',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107603',
            'name'=>'Faxinal',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107652',
            'name'=>'Fazenda Rio Grande',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107702',
            'name'=>'Fênix',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107736',
            'name'=>'Fernandes Pinheiro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107751',
            'name'=>'Figueira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107801',
            'name'=>'Floraí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107850',
            'name'=>'Flor da Serra do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4107900',
            'name'=>'Floresta',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108007',
            'name'=>'Florestópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108106',
            'name'=>'Flórida',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108205',
            'name'=>'Formosa do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108304',
            'name'=>'Foz do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108320',
            'name'=>'Francisco Alves',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108403',
            'name'=>'Francisco Beltrão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108452',
            'name'=>'Foz do Jordão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108502',
            'name'=>'General Carneiro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108551',
            'name'=>'Godoy Moreira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108601',
            'name'=>'Goioerê',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108650',
            'name'=>'Goioxim',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108700',
            'name'=>'Grandes Rios',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108809',
            'name'=>'Guaíra',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108908',
            'name'=>'Guairaçá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4108957',
            'name'=>'Guamiranga',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109005',
            'name'=>'Guapirama',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109104',
            'name'=>'Guaporema',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109203',
            'name'=>'Guaraci',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109302',
            'name'=>'Guaraniaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109401',
            'name'=>'Guarapuava',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109500',
            'name'=>'Guaraqueçaba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109609',
            'name'=>'Guaratuba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109658',
            'name'=>'Honório Serpa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109708',
            'name'=>'Ibaiti',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109757',
            'name'=>'Ibema',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109807',
            'name'=>'Ibiporã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4109906',
            'name'=>'Icaraíma',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110003',
            'name'=>'Iguaraçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110052',
            'name'=>'Iguatu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110078',
            'name'=>'Imbaú',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110102',
            'name'=>'Imbituva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110201',
            'name'=>'Inácio Martins',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110300',
            'name'=>'Inajá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110409',
            'name'=>'Indianópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110508',
            'name'=>'Ipiranga',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110607',
            'name'=>'Iporã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110656',
            'name'=>'Iracema do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110706',
            'name'=>'Irati',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110805',
            'name'=>'Iretama',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110904',
            'name'=>'Itaguajé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4110953',
            'name'=>'Itaipulândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111001',
            'name'=>'Itambaracá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111100',
            'name'=>'Itambé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111209',
            'name'=>'Itapejara Do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111258',
            'name'=>'Itaperuçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111308',
            'name'=>'Itaúna do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111407',
            'name'=>'Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111506',
            'name'=>'Ivaiporã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111555',
            'name'=>'Ivaté',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111605',
            'name'=>'Ivatuba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111704',
            'name'=>'Jaboti',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111803',
            'name'=>'Jacarezinho',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4111902',
            'name'=>'Jaguapitã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112009',
            'name'=>'Jaguariaíva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112108',
            'name'=>'Jandaia do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112207',
            'name'=>'Janiópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112306',
            'name'=>'Japira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112405',
            'name'=>'Japurá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112504',
            'name'=>'Jardim Alegre',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112603',
            'name'=>'Jardim Olinda',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112702',
            'name'=>'Jataizinho',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112751',
            'name'=>'Jesuítas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112801',
            'name'=>'Joaquim Távora',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112900',
            'name'=>'Jundiaí do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4112959',
            'name'=>'Juranda',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113007',
            'name'=>'Jussara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113106',
            'name'=>'Kaloré',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113205',
            'name'=>'Lapa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113254',
            'name'=>'Laranjal',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113304',
            'name'=>'Laranjeiras do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113403',
            'name'=>'Leópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113429',
            'name'=>'Lidianópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113452',
            'name'=>'Lindoeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113502',
            'name'=>'Loanda',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113601',
            'name'=>'Lobato',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113700',
            'name'=>'Londrina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113734',
            'name'=>'Luiziana',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113759',
            'name'=>'Lunardelli',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113809',
            'name'=>'Lupionópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4113908',
            'name'=>'Mallet',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114005',
            'name'=>'Mamborê',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114104',
            'name'=>'Mandaguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114203',
            'name'=>'Mandaguari',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114302',
            'name'=>'Mandirituba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114351',
            'name'=>'Manfrinópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114401',
            'name'=>'Mangueirinha',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114500',
            'name'=>'Manoel Ribas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114609',
            'name'=>'Marechal Cândido Rondon',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114708',
            'name'=>'Maria Helena',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114807',
            'name'=>'Marialva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4114906',
            'name'=>'Marilândia do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115002',
            'name'=>'Marilena',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115101',
            'name'=>'Mariluz',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115200',
            'name'=>'Maringá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115309',
            'name'=>'Mariópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115358',
            'name'=>'Maripá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115408',
            'name'=>'Marmeleiro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115457',
            'name'=>'Marquinho',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115507',
            'name'=>'Marumbi',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115606',
            'name'=>'Matelândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115705',
            'name'=>'Matinhos',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115739',
            'name'=>'Mato Rico',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115754',
            'name'=>'Mauá da Serra',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115804',
            'name'=>'Medianeira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115853',
            'name'=>'Mercedes',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4115903',
            'name'=>'Mirador',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116000',
            'name'=>'Miraselva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116059',
            'name'=>'Missal',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116109',
            'name'=>'Moreira Sales',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116208',
            'name'=>'Morretes',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116307',
            'name'=>'Munhoz de Melo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116406',
            'name'=>'Nossa Senhora das Graças',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116505',
            'name'=>'Nova Aliança do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116604',
            'name'=>'Nova América da Colina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116703',
            'name'=>'Nova Aurora',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116802',
            'name'=>'Nova Cantu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116901',
            'name'=>'Nova Esperança',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4116950',
            'name'=>'Nova Esperança do Sudoeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117008',
            'name'=>'Nova Fátima',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117057',
            'name'=>'Nova Laranjeiras',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117107',
            'name'=>'Nova Londrina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117206',
            'name'=>'Nova Olímpia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117214',
            'name'=>'Nova Santa Bárbara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117222',
            'name'=>'Nova Santa Rosa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117255',
            'name'=>'Nova Prata do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117271',
            'name'=>'Nova Tebas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117297',
            'name'=>'Novo Itacolomi',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117305',
            'name'=>'Ortigueira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117404',
            'name'=>'Ourizona',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117453',
            'name'=>'Ouro Verde do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117503',
            'name'=>'Paiçandu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117602',
            'name'=>'Palmas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117701',
            'name'=>'Palmeira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117800',
            'name'=>'Palmital',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4117909',
            'name'=>'Palotina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118006',
            'name'=>'Paraíso do Norte',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118105',
            'name'=>'Paranacity',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118204',
            'name'=>'Paranaguá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118303',
            'name'=>'Paranapoema',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118402',
            'name'=>'Paranavaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118451',
            'name'=>'Pato Bragado',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118501',
            'name'=>'Pato Branco',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118600',
            'name'=>'Paula Freitas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118709',
            'name'=>'Paulo Frontin',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118808',
            'name'=>'Peabiru',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118857',
            'name'=>'Perobal',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4118907',
            'name'=>'Pérola',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119004',
            'name'=>'Pérola Do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119103',
            'name'=>'Piên',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119152',
            'name'=>'Pinhais',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119202',
            'name'=>'Pinhalão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119251',
            'name'=>'Pinhal de São Bento',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119301',
            'name'=>'Pinhão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119400',
            'name'=>'Piraí do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119509',
            'name'=>'Piraquara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119608',
            'name'=>'Pitanga',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119657',
            'name'=>'Pitangueiras',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119707',
            'name'=>'Planaltina do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119806',
            'name'=>'Planalto',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119905',
            'name'=>'Ponta Grossa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4119954',
            'name'=>'Pontal do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120002',
            'name'=>'Porecatu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120101',
            'name'=>'Porto Amazonas',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120150',
            'name'=>'Porto Barreiro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120200',
            'name'=>'Porto Rico',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120309',
            'name'=>'Porto Vitória',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120333',
            'name'=>'Prado Ferreira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120358',
            'name'=>'Pranchita',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120408',
            'name'=>'Presidente Castelo Branco',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120507',
            'name'=>'Primeiro de Maio',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120606',
            'name'=>'Prudentópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120655',
            'name'=>'Quarto Centenário',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120705',
            'name'=>'Quatiguá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120804',
            'name'=>'Quatro Barras',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120853',
            'name'=>'Quatro Pontes',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4120903',
            'name'=>'Quedas do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121000',
            'name'=>'Querência do Norte',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121109',
            'name'=>'Quinta do Sol',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121208',
            'name'=>'Quitandinha',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121257',
            'name'=>'Ramilândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121307',
            'name'=>'Rancho Alegre',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121356',
            'name'=>'Rancho Alegre Do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121406',
            'name'=>'Realeza',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121505',
            'name'=>'Rebouças',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121604',
            'name'=>'Renascença',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121703',
            'name'=>'Reserva',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121752',
            'name'=>'Reserva do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121802',
            'name'=>'Ribeirão Claro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4121901',
            'name'=>'Ribeirão do Pinhal',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122008',
            'name'=>'Rio Azul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122107',
            'name'=>'Rio Bom',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122156',
            'name'=>'Rio Bonito do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122172',
            'name'=>'Rio Branco do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122206',
            'name'=>'Rio Branco do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122305',
            'name'=>'Rio Negro',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122404',
            'name'=>'Rolândia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122503',
            'name'=>'Roncador',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122602',
            'name'=>'Rondon',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122651',
            'name'=>'Rosário do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122701',
            'name'=>'Sabáudia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122800',
            'name'=>'Salgado Filho',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4122909',
            'name'=>'Salto do Itararé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123006',
            'name'=>'Salto do Lontra',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123105',
            'name'=>'Santa Amélia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123204',
            'name'=>'Santa Cecília do Pavão',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123303',
            'name'=>'Santa Cruz de Monte Castelo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123402',
            'name'=>'Santa Fé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123501',
            'name'=>'Santa Helena',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123600',
            'name'=>'Santa Inês',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123709',
            'name'=>'Santa Isabel do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123808',
            'name'=>'Santa Izabel do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123824',
            'name'=>'Santa Lúcia',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123857',
            'name'=>'Santa Maria do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123907',
            'name'=>'Santa Mariana',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4123956',
            'name'=>'Santa Mônica',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124004',
            'name'=>'Santana do Itararé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124020',
            'name'=>'Santa Tereza do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124053',
            'name'=>'Santa Terezinha de Itaipu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124103',
            'name'=>'Santo Antônio da Platina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124202',
            'name'=>'Santo Antônio do Caiuá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124301',
            'name'=>'Santo Antônio do Paraíso',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124400',
            'name'=>'Santo Antônio do Sudoeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124509',
            'name'=>'Santo Inácio',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124608',
            'name'=>'São Carlos do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124707',
            'name'=>'São Jerônimo da Serra',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124806',
            'name'=>'São João',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4124905',
            'name'=>'São João do Caiuá',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125001',
            'name'=>'São João do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125100',
            'name'=>'São João do Triunfo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125209',
            'name'=>'São Jorge Do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125308',
            'name'=>'São Jorge do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125357',
            'name'=>'São Jorge do Patrocínio',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125407',
            'name'=>'São José da Boa Vista',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125456',
            'name'=>'São José das Palmeiras',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125506',
            'name'=>'São José dos Pinhais',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125555',
            'name'=>'São Manoel do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125605',
            'name'=>'São Mateus do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125704',
            'name'=>'São Miguel do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125753',
            'name'=>'São Pedro do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125803',
            'name'=>'São Pedro do Ivaí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4125902',
            'name'=>'São Pedro do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126009',
            'name'=>'São Sebastião da Amoreira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126108',
            'name'=>'São Tomé',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126207',
            'name'=>'Sapopema',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126256',
            'name'=>'Sarandi',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126272',
            'name'=>'Saudade do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126306',
            'name'=>'Sengés',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126355',
            'name'=>'Serranópolis do Iguaçu',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126405',
            'name'=>'Sertaneja',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126504',
            'name'=>'Sertanópolis',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126603',
            'name'=>'Siqueira Campos',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126652',
            'name'=>'Sulina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126678',
            'name'=>'Tamarana',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126702',
            'name'=>'Tamboara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126801',
            'name'=>'Tapejara',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4126900',
            'name'=>'Tapira',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127007',
            'name'=>'Teixeira Soares',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127106',
            'name'=>'Telêmaco Borba',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127205',
            'name'=>'Terra Boa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127304',
            'name'=>'Terra Rica',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127403',
            'name'=>'Terra Roxa',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127502',
            'name'=>'Tibagi',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127601',
            'name'=>'Tijucas do Sul',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127700',
            'name'=>'Toledo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127809',
            'name'=>'Tomazina',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127858',
            'name'=>'Três Barras do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127882',
            'name'=>'Tunas do Paraná',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127908',
            'name'=>'Tuneiras do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127957',
            'name'=>'Tupãssi',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4127965',
            'name'=>'Turvo',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128005',
            'name'=>'Ubiratã',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128104',
            'name'=>'Umuarama',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128203',
            'name'=>'União da Vitória',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128302',
            'name'=>'Uniflor',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128401',
            'name'=>'Uraí',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128500',
            'name'=>'Wenceslau Braz',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128534',
            'name'=>'Ventania',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128559',
            'name'=>'Vera Cruz do Oeste',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128609',
            'name'=>'Verê',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128625',
            'name'=>'Alto Paraíso',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128633',
            'name'=>'Doutor Ulysses',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128658',
            'name'=>'Virmond',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128708',
            'name'=>'Vitorino',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4128807',
            'name'=>'Xambrê',
            'state_id'=> State::where('uf','PR')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200051',
            'name'=>'Abdon Batista',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200101',
            'name'=>'Abelardo Luz',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200200',
            'name'=>'Agrolândia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200309',
            'name'=>'Agronômica',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200408',
            'name'=>'Água Doce',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200507',
            'name'=>'Águas de Chapecó',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200556',
            'name'=>'Águas Frias',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200606',
            'name'=>'Águas Mornas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200705',
            'name'=>'Alfredo Wagner',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200754',
            'name'=>'Alto Bela Vista',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200804',
            'name'=>'Anchieta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4200903',
            'name'=>'Angelina',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201000',
            'name'=>'Anita Garibaldi',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201109',
            'name'=>'Anitápolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201208',
            'name'=>'Antônio Carlos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201257',
            'name'=>'Apiúna',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201273',
            'name'=>'Arabutã',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201307',
            'name'=>'Araquari',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201406',
            'name'=>'Araranguá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201505',
            'name'=>'Armazém',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201604',
            'name'=>'Arroio Trinta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201653',
            'name'=>'Arvoredo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201703',
            'name'=>'Ascurra',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201802',
            'name'=>'Atalanta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201901',
            'name'=>'Aurora',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4201950',
            'name'=>'Balneário Arroio do Silva',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202008',
            'name'=>'Balneário Camboriú',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202057',
            'name'=>'Balneário Barra do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202073',
            'name'=>'Balneário Gaivota',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202081',
            'name'=>'Bandeirante',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202099',
            'name'=>'Barra Bonita',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202107',
            'name'=>'Barra Velha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202131',
            'name'=>'Bela Vista do Toldo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202156',
            'name'=>'Belmonte',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202206',
            'name'=>'Benedito Novo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202305',
            'name'=>'Biguaçu',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202404',
            'name'=>'Blumenau',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202438',
            'name'=>'Bocaina do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202453',
            'name'=>'Bombinhas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202503',
            'name'=>'Bom Jardim da Serra',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202537',
            'name'=>'Bom Jesus',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202578',
            'name'=>'Bom Jesus do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202602',
            'name'=>'Bom Retiro',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202701',
            'name'=>'Botuverá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202800',
            'name'=>'Braço do Norte',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202859',
            'name'=>'Braço do Trombudo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202875',
            'name'=>'Brunópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4202909',
            'name'=>'Brusque',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203006',
            'name'=>'Caçador',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203105',
            'name'=>'Caibi',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203154',
            'name'=>'Calmon',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203204',
            'name'=>'Camboriú',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203253',
            'name'=>'Capão Alto',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203303',
            'name'=>'Campo Alegre',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203402',
            'name'=>'Campo Belo do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203501',
            'name'=>'Campo Erê',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203600',
            'name'=>'Campos Novos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203709',
            'name'=>'Canelinha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203808',
            'name'=>'Canoinhas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203907',
            'name'=>'Capinzal',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4203956',
            'name'=>'Capivari de Baixo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204004',
            'name'=>'Catanduvas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204103',
            'name'=>'Caxambu do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204152',
            'name'=>'Celso Ramos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204178',
            'name'=>'Cerro Negro',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204194',
            'name'=>'Chapadão do Lageado',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204202',
            'name'=>'Chapecó',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204251',
            'name'=>'Cocal do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204301',
            'name'=>'Concórdia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204350',
            'name'=>'Cordilheira Alta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204400',
            'name'=>'Coronel Freitas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204459',
            'name'=>'Coronel Martins',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204509',
            'name'=>'Corupá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204558',
            'name'=>'Correia Pinto',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204608',
            'name'=>'Criciúma',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204707',
            'name'=>'Cunha Porã',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204756',
            'name'=>'Cunhataí',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204806',
            'name'=>'Curitibanos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4204905',
            'name'=>'Descanso',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205001',
            'name'=>'Dionísio Cerqueira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205100',
            'name'=>'Dona Emma',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205159',
            'name'=>'Doutor Pedrinho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205175',
            'name'=>'Entre Rios',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205191',
            'name'=>'Ermo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205209',
            'name'=>'Erval Velho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205308',
            'name'=>'Faxinal dos Guedes',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205357',
            'name'=>'Flor do Sertão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205407',
            'name'=>'Florianópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205431',
            'name'=>'Formosa do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205456',
            'name'=>'Forquilhinha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205506',
            'name'=>'Fraiburgo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205555',
            'name'=>'Frei Rogério',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205605',
            'name'=>'Galvão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205704',
            'name'=>'Garopaba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205803',
            'name'=>'Garuva',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4205902',
            'name'=>'Gaspar',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206009',
            'name'=>'Governador Celso Ramos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206108',
            'name'=>'Grão Pará',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206207',
            'name'=>'Gravatal',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206306',
            'name'=>'Guabiruba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206405',
            'name'=>'Guaraciaba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206504',
            'name'=>'Guaramirim',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206603',
            'name'=>'Guarujá do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206652',
            'name'=>'Guatambú',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206702',
            'name'=>'Herval Do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206751',
            'name'=>'Ibiam',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206801',
            'name'=>'Ibicaré',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4206900',
            'name'=>'Ibirama',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207007',
            'name'=>'Içara',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207106',
            'name'=>'Ilhota',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207205',
            'name'=>'Imaruí',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207304',
            'name'=>'Imbituba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207403',
            'name'=>'Imbuia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207502',
            'name'=>'Indaial',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207577',
            'name'=>'Iomerê',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207601',
            'name'=>'Ipira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207650',
            'name'=>'Iporã do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207684',
            'name'=>'Ipuaçu',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207700',
            'name'=>'Ipumirim',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207759',
            'name'=>'Iraceminha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207809',
            'name'=>'Irani',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207858',
            'name'=>'Irati',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4207908',
            'name'=>'Irineópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208005',
            'name'=>'Itá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208104',
            'name'=>'Itaiópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208203',
            'name'=>'Itajaí',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208302',
            'name'=>'Itapema',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208401',
            'name'=>'Itapiranga',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208450',
            'name'=>'Itapoá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208500',
            'name'=>'Ituporanga',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208609',
            'name'=>'Jaborá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208708',
            'name'=>'Jacinto Machado',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208807',
            'name'=>'Jaguaruna',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208906',
            'name'=>'Jaraguá do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4208955',
            'name'=>'Jardinópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209003',
            'name'=>'Joaçaba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209102',
            'name'=>'Joinville',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209151',
            'name'=>'José Boiteux',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209177',
            'name'=>'Jupiá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209201',
            'name'=>'Lacerdópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209300',
            'name'=>'Lages',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209409',
            'name'=>'Laguna',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209458',
            'name'=>'Lajeado Grande',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209508',
            'name'=>'Laurentino',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209607',
            'name'=>'Lauro Muller',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209706',
            'name'=>'Lebon Régis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209805',
            'name'=>'Leoberto Leal',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209854',
            'name'=>'Lindóia do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4209904',
            'name'=>'Lontras',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210001',
            'name'=>'Luiz Alves',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210035',
            'name'=>'Luzerna',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210050',
            'name'=>'Macieira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210100',
            'name'=>'Mafra',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210209',
            'name'=>'Major Gercino',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210308',
            'name'=>'Major Vieira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210407',
            'name'=>'Maracajá',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210506',
            'name'=>'Maravilha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210555',
            'name'=>'Marema',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210605',
            'name'=>'Massaranduba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210704',
            'name'=>'Matos Costa',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210803',
            'name'=>'Meleiro',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210852',
            'name'=>'Mirim Doce',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4210902',
            'name'=>'Modelo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211009',
            'name'=>'Mondaí',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211058',
            'name'=>'Monte Carlo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211108',
            'name'=>'Monte Castelo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211207',
            'name'=>'Morro da Fumaça',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211256',
            'name'=>'Morro Grande',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211306',
            'name'=>'Navegantes',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211405',
            'name'=>'Nova Erechim',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211454',
            'name'=>'Nova Itaberaba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211504',
            'name'=>'Nova Trento',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211603',
            'name'=>'Nova Veneza',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211652',
            'name'=>'Novo Horizonte',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211702',
            'name'=>'Orleans',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211751',
            'name'=>'Otacílio Costa',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211801',
            'name'=>'Ouro',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211850',
            'name'=>'Ouro Verde',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211876',
            'name'=>'Paial',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211892',
            'name'=>'Painel',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4211900',
            'name'=>'Palhoça',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212007',
            'name'=>'Palma Sola',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212056',
            'name'=>'Palmeira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212106',
            'name'=>'Palmitos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );

        City::firstOrCreate( [
            'ibge'=>'4212205',
            'name'=>'Papanduva',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212239',
            'name'=>'Paraíso',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212254',
            'name'=>'Passo de Torres',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212270',
            'name'=>'Passos Maia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212304',
            'name'=>'Paulo Lopes',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212403',
            'name'=>'Pedras Grandes',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212502',
            'name'=>'Penha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212601',
            'name'=>'Peritiba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212650',
            'name'=>'Pescaria Brava',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212700',
            'name'=>'Petrolândia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212809',
            'name'=>'Balneário Piçarras',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4212908',
            'name'=>'Pinhalzinho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213005',
            'name'=>'Pinheiro Preto',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213104',
            'name'=>'Piratuba',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213153',
            'name'=>'Planalto Alegre',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213203',
            'name'=>'Pomerode',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213302',
            'name'=>'Ponte Alta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213351',
            'name'=>'Ponte Alta do Norte',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213401',
            'name'=>'Ponte Serrada',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213500',
            'name'=>'Porto Belo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213609',
            'name'=>'Porto União',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213708',
            'name'=>'Pouso Redondo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213807',
            'name'=>'Praia Grande',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4213906',
            'name'=>'Presidente Castello Branco',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214003',
            'name'=>'Presidente Getúlio',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214102',
            'name'=>'Presidente Nereu',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214151',
            'name'=>'Princesa',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214201',
            'name'=>'Quilombo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214300',
            'name'=>'Rancho Queimado',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214409',
            'name'=>'Rio das Antas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214508',
            'name'=>'Rio do Campo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214607',
            'name'=>'Rio do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214706',
            'name'=>'Rio dos Cedros',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214805',
            'name'=>'Rio do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4214904',
            'name'=>'Rio Fortuna',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215000',
            'name'=>'Rio Negrinho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215059',
            'name'=>'Rio Rufino',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215075',
            'name'=>'Riqueza',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215109',
            'name'=>'Rodeio',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215208',
            'name'=>'Romelândia',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215307',
            'name'=>'Salete',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215356',
            'name'=>'Saltinho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215406',
            'name'=>'Salto Veloso',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215455',
            'name'=>'Sangão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215505',
            'name'=>'Santa Cecília',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215554',
            'name'=>'Santa Helena',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215604',
            'name'=>'Santa Rosa de Lima',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215653',
            'name'=>'Santa Rosa do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215679',
            'name'=>'Santa Terezinha',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215687',
            'name'=>'Santa Terezinha do Progresso',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215695',
            'name'=>'Santiago do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215703',
            'name'=>'Santo Amaro da Imperatriz',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215752',
            'name'=>'São Bernardino',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215802',
            'name'=>'São Bento do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4215901',
            'name'=>'São Bonifácio',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216008',
            'name'=>'São Carlos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216057',
            'name'=>'São Cristovão do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216107',
            'name'=>'São Domingos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216206',
            'name'=>'São Francisco do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216255',
            'name'=>'São João do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216305',
            'name'=>'São João Batista',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216354',
            'name'=>'São João do Itaperiú',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216404',
            'name'=>'São João do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216503',
            'name'=>'São Joaquim',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216602',
            'name'=>'São José',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216701',
            'name'=>'São José do Cedro',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216800',
            'name'=>'São José do Cerrito',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4216909',
            'name'=>'São Lourenço do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217006',
            'name'=>'São Ludgero',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217105',
            'name'=>'São Martinho',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217154',
            'name'=>'São Miguel da Boa Vista',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217204',
            'name'=>'São Miguel do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217253',
            'name'=>'São Pedro de Alcântara',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217303',
            'name'=>'Saudades',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217402',
            'name'=>'Schroeder',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217501',
            'name'=>'Seara',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217550',
            'name'=>'Serra Alta',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217600',
            'name'=>'Siderópolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217709',
            'name'=>'Sombrio',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217758',
            'name'=>'Sul Brasil',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217808',
            'name'=>'Taió',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217907',
            'name'=>'Tangará',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4217956',
            'name'=>'Tigrinhos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218004',
            'name'=>'Tijucas',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218103',
            'name'=>'Timbé do Sul',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218202',
            'name'=>'Timbó',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218251',
            'name'=>'Timbó Grande',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218301',
            'name'=>'Três Barras',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218350',
            'name'=>'Treviso',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218400',
            'name'=>'Treze de Maio',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218509',
            'name'=>'Treze Tílias',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218608',
            'name'=>'Trombudo Central',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218707',
            'name'=>'Tubarão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218756',
            'name'=>'Tunápolis',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218806',
            'name'=>'Turvo',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218855',
            'name'=>'União do Oeste',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218905',
            'name'=>'Urubici',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4218954',
            'name'=>'Urupema',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219002',
            'name'=>'Urussanga',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219101',
            'name'=>'Vargeão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219150',
            'name'=>'Vargem',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219176',
            'name'=>'Vargem Bonita',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219200',
            'name'=>'Vidal Ramos',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219309',
            'name'=>'Videira',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219358',
            'name'=>'Vitor Meireles',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219408',
            'name'=>'Witmarsum',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219507',
            'name'=>'Xanxerê',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219606',
            'name'=>'Xavantina',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219705',
            'name'=>'Xaxim',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4219853',
            'name'=>'Zortéa',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4220000',
            'name'=>'Balneário Rincão',
            'state_id'=> State::where('uf','SC')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300034',
            'name'=>'Aceguá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300059',
            'name'=>'Água Santa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300109',
            'name'=>'Agudo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300208',
            'name'=>'Ajuricaba',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300307',
            'name'=>'Alecrim',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300406',
            'name'=>'Alegrete',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300455',
            'name'=>'Alegria',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300471',
            'name'=>'Almirante Tamandaré do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300505',
            'name'=>'Alpestre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300554',
            'name'=>'Alto Alegre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300570',
            'name'=>'Alto Feliz',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300604',
            'name'=>'Alvorada',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300638',
            'name'=>'Amaral Ferrador',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300646',
            'name'=>'Ametista do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300661',
            'name'=>'André da Rocha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300703',
            'name'=>'Anta Gorda',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300802',
            'name'=>'Antônio Prado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300851',
            'name'=>'Arambaré',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300877',
            'name'=>'Araricá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4300901',
            'name'=>'Aratiba',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301008',
            'name'=>'Arroio do Meio',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301057',
            'name'=>'Arroio do Sal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301073',
            'name'=>'Arroio do Padre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301107',
            'name'=>'Arroio dos Ratos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301206',
            'name'=>'Arroio do Tigre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301305',
            'name'=>'Arroio Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301404',
            'name'=>'Arvorezinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301503',
            'name'=>'Augusto Pestana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301552',
            'name'=>'Áurea',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301602',
            'name'=>'Bagé',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301636',
            'name'=>'Balneário Pinhal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301651',
            'name'=>'Barão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301701',
            'name'=>'Barão de Cotegipe',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301750',
            'name'=>'Barão do Triunfo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301800',
            'name'=>'Barracão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301859',
            'name'=>'Barra do Guarita',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301875',
            'name'=>'Barra do Quaraí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301909',
            'name'=>'Barra do Ribeiro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301925',
            'name'=>'Barra do Rio Azul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4301958',
            'name'=>'Barra Funda',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302006',
            'name'=>'Barros Cassal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302055',
            'name'=>'Benjamin Constant do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302105',
            'name'=>'Bento Gonçalves',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302154',
            'name'=>'Boa Vista das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302204',
            'name'=>'Boa Vista do Buricá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302220',
            'name'=>'Boa Vista do Cadeado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302238',
            'name'=>'Boa Vista do Incra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302253',
            'name'=>'Boa Vista do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302303',
            'name'=>'Bom Jesus',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302352',
            'name'=>'Bom Princípio',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302378',
            'name'=>'Bom Progresso',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302402',
            'name'=>'Bom Retiro do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302451',
            'name'=>'Boqueirão do Leão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302501',
            'name'=>'Bossoroca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302584',
            'name'=>'Bozano',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302600',
            'name'=>'Braga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302659',
            'name'=>'Brochier',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302709',
            'name'=>'Butiá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302808',
            'name'=>'Caçapava do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4302907',
            'name'=>'Cacequi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303004',
            'name'=>'Cachoeira do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303103',
            'name'=>'Cachoeirinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303202',
            'name'=>'Cacique Doble',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303301',
            'name'=>'Caibaté',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303400',
            'name'=>'Caiçara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303509',
            'name'=>'Camaquã',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303558',
            'name'=>'Camargo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303608',
            'name'=>'Cambará do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303673',
            'name'=>'Campestre da Serra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303707',
            'name'=>'Campina das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303806',
            'name'=>'Campinas do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4303905',
            'name'=>'Campo Bom',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304002',
            'name'=>'Campo Novo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304101',
            'name'=>'Campos Borges',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304200',
            'name'=>'Candelária',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304309',
            'name'=>'Cândido Godói',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304358',
            'name'=>'Candiota',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304408',
            'name'=>'Canela',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304507',
            'name'=>'Canguçu',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304606',
            'name'=>'Canoas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304614',
            'name'=>'Canudos do Vale',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304622',
            'name'=>'Capão Bonito do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304630',
            'name'=>'Capão da Canoa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304655',
            'name'=>'Capão do Cipó',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304663',
            'name'=>'Capão do Leão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304671',
            'name'=>'Capivari do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304689',
            'name'=>'Capela de Santana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304697',
            'name'=>'Capitão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304705',
            'name'=>'Carazinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304713',
            'name'=>'Caraá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304804',
            'name'=>'Carlos Barbosa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304853',
            'name'=>'Carlos Gomes',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304903',
            'name'=>'Casca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4304952',
            'name'=>'Caseiros',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305009',
            'name'=>'Catuípe',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305108',
            'name'=>'Caxias do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305116',
            'name'=>'Centenário',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305124',
            'name'=>'Cerrito',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305132',
            'name'=>'Cerro Branco',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305157',
            'name'=>'Cerro Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305173',
            'name'=>'Cerro Grande do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305207',
            'name'=>'Cerro Largo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305306',
            'name'=>'Chapada',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305355',
            'name'=>'Charqueadas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305371',
            'name'=>'Charrua',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305405',
            'name'=>'Chiapetta',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305439',
            'name'=>'Chuí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305447',
            'name'=>'Chuvisca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305454',
            'name'=>'Cidreira',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305504',
            'name'=>'Ciríaco',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305587',
            'name'=>'Colinas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305603',
            'name'=>'Colorado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305702',
            'name'=>'Condor',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305801',
            'name'=>'Constantina',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305835',
            'name'=>'Coqueiro Baixo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305850',
            'name'=>'Coqueiros do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305871',
            'name'=>'Coronel Barros',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305900',
            'name'=>'Coronel Bicaco',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305934',
            'name'=>'Coronel Pilar',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305959',
            'name'=>'Cotiporã',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4305975',
            'name'=>'Coxilha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306007',
            'name'=>'Crissiumal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306056',
            'name'=>'Cristal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306072',
            'name'=>'Cristal do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306106',
            'name'=>'Cruz Alta',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306130',
            'name'=>'Cruzaltense',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306205',
            'name'=>'Cruzeiro do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306304',
            'name'=>'David Canabarro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306320',
            'name'=>'Derrubadas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306353',
            'name'=>'Dezesseis de Novembro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306379',
            'name'=>'Dilermando de Aguiar',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306403',
            'name'=>'Dois Irmãos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306429',
            'name'=>'Dois Irmãos das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306452',
            'name'=>'Dois Lajeados',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306502',
            'name'=>'Dom Feliciano',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306551',
            'name'=>'Dom Pedro de Alcântara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306601',
            'name'=>'Dom Pedrito',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306700',
            'name'=>'Dona Francisca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306734',
            'name'=>'Doutor Maurício Cardoso',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306759',
            'name'=>'Doutor Ricardo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306767',
            'name'=>'Eldorado do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306809',
            'name'=>'Encantado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306908',
            'name'=>'Encruzilhada do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306924',
            'name'=>'Engenho Velho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306932',
            'name'=>'Entre-Ijuís',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306957',
            'name'=>'Entre Rios do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4306973',
            'name'=>'Erebango',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307005',
            'name'=>'Erechim',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307054',
            'name'=>'Ernestina',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307104',
            'name'=>'Herval',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307203',
            'name'=>'Erval Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307302',
            'name'=>'Erval Seco',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307401',
            'name'=>'Esmeralda',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307450',
            'name'=>'Esperança do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307500',
            'name'=>'Espumoso',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307559',
            'name'=>'Estação',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307609',
            'name'=>'Estância Velha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307708',
            'name'=>'Esteio',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307807',
            'name'=>'Estrela',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307815',
            'name'=>'Estrela Velha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307831',
            'name'=>'Eugênio de Castro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307864',
            'name'=>'Fagundes Varela',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4307906',
            'name'=>'Farroupilha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308003',
            'name'=>'Faxinal do Soturno',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308052',
            'name'=>'Faxinalzinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308078',
            'name'=>'Fazenda Vilanova',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308102',
            'name'=>'Feliz',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308201',
            'name'=>'Flores da Cunha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308250',
            'name'=>'Floriano Peixoto',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308300',
            'name'=>'Fontoura Xavier',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308409',
            'name'=>'Formigueiro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308433',
            'name'=>'Forquetinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308458',
            'name'=>'Fortaleza dos Valos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308508',
            'name'=>'Frederico Westphalen',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308607',
            'name'=>'Garibaldi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308656',
            'name'=>'Garruchos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308706',
            'name'=>'Gaurama',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308805',
            'name'=>'General Câmara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308854',
            'name'=>'Gentil',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4308904',
            'name'=>'Getúlio Vargas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309001',
            'name'=>'Giruá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309050',
            'name'=>'Glorinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309100',
            'name'=>'Gramado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309126',
            'name'=>'Gramado dos Loureiros',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309159',
            'name'=>'Gramado Xavier',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309209',
            'name'=>'Gravataí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309258',
            'name'=>'Guabiju',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309308',
            'name'=>'Guaíba',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309407',
            'name'=>'Guaporé',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309506',
            'name'=>'Guarani das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309555',
            'name'=>'Harmonia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309571',
            'name'=>'Herveiras',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309605',
            'name'=>'Horizontina',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309654',
            'name'=>'Hulha Negra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309704',
            'name'=>'Humaitá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309753',
            'name'=>'Ibarama',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309803',
            'name'=>'Ibiaçá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309902',
            'name'=>'Ibiraiaras',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4309951',
            'name'=>'Ibirapuitã',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310009',
            'name'=>'Ibirubá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310108',
            'name'=>'Igrejinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310207',
            'name'=>'Ijuí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310306',
            'name'=>'Ilópolis',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310330',
            'name'=>'Imbé',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310363',
            'name'=>'Imigrante',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310405',
            'name'=>'Independência',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310413',
            'name'=>'Inhacorá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310439',
            'name'=>'Ipê',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310462',
            'name'=>'Ipiranga do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310504',
            'name'=>'Iraí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310538',
            'name'=>'Itaara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310553',
            'name'=>'Itacurubi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310579',
            'name'=>'Itapuca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310603',
            'name'=>'Itaqui',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310652',
            'name'=>'Itati',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310702',
            'name'=>'Itatiba do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310751',
            'name'=>'Ivorá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310801',
            'name'=>'Ivoti',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310850',
            'name'=>'Jaboticaba',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310876',
            'name'=>'Jacuizinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4310900',
            'name'=>'Jacutinga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311007',
            'name'=>'Jaguarão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311106',
            'name'=>'Jaguari',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311122',
            'name'=>'Jaquirana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311130',
            'name'=>'Jari',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311155',
            'name'=>'Jóia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311205',
            'name'=>'Júlio de Castilhos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311239',
            'name'=>'Lagoa Bonita do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311254',
            'name'=>'Lagoão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311270',
            'name'=>'Lagoa dos Três Cantos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311304',
            'name'=>'Lagoa Vermelha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311403',
            'name'=>'Lajeado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311429',
            'name'=>'Lajeado do Bugre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311502',
            'name'=>'Lavras do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311601',
            'name'=>'Liberato Salzano',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311627',
            'name'=>'Lindolfo Collor',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311643',
            'name'=>'Linha Nova',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311700',
            'name'=>'Machadinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311718',
            'name'=>'Maçambará',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311734',
            'name'=>'Mampituba',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311759',
            'name'=>'Manoel Viana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311775',
            'name'=>'Maquiné',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311791',
            'name'=>'Maratá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311809',
            'name'=>'Marau',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311908',
            'name'=>'Marcelino Ramos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4311981',
            'name'=>'Mariana Pimentel',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312005',
            'name'=>'Mariano Moro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312054',
            'name'=>'Marques de Souza',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312104',
            'name'=>'Mata',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312138',
            'name'=>'Mato Castelhano',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312153',
            'name'=>'Mato Leitão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312179',
            'name'=>'Mato Queimado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312203',
            'name'=>'Maximiliano de Almeida',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312252',
            'name'=>'Minas do Leão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312302',
            'name'=>'Miraguaí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312351',
            'name'=>'Montauri',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312377',
            'name'=>'Monte Alegre dos Campos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312385',
            'name'=>'Monte Belo do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312401',
            'name'=>'Montenegro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312427',
            'name'=>'Mormaço',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312443',
            'name'=>'Morrinhos do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312450',
            'name'=>'Morro Redondo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312476',
            'name'=>'Morro Reuter',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312500',
            'name'=>'Mostardas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312609',
            'name'=>'Muçum',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312617',
            'name'=>'Muitos Capões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312625',
            'name'=>'Muliterno',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312658',
            'name'=>'Não-Me-Toque',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312674',
            'name'=>'Nicolau Vergueiro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312708',
            'name'=>'Nonoai',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312757',
            'name'=>'Nova Alvorada',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312807',
            'name'=>'Nova Araçá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312906',
            'name'=>'Nova Bassano',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4312955',
            'name'=>'Nova Boa Vista',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313003',
            'name'=>'Nova Bréscia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313011',
            'name'=>'Nova Candelária',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313037',
            'name'=>'Nova Esperança do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313060',
            'name'=>'Nova Hartz',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313086',
            'name'=>'Nova Pádua',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313102',
            'name'=>'Nova Palma',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313201',
            'name'=>'Nova Petrópolis',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313300',
            'name'=>'Nova Prata',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313334',
            'name'=>'Nova Ramada',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313359',
            'name'=>'Nova Roma do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313375',
            'name'=>'Nova Santa Rita',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313391',
            'name'=>'Novo Cabrais',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313409',
            'name'=>'Novo Hamburgo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313425',
            'name'=>'Novo Machado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313441',
            'name'=>'Novo Tiradentes',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313466',
            'name'=>'Novo Xingu',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313490',
            'name'=>'Novo Barreiro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313508',
            'name'=>'Osório',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313607',
            'name'=>'Paim Filho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313656',
            'name'=>'Palmares do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313706',
            'name'=>'Palmeira das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313805',
            'name'=>'Palmitinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313904',
            'name'=>'Panambi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4313953',
            'name'=>'Pantano Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314001',
            'name'=>'Paraí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314027',
            'name'=>'Paraíso do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314035',
            'name'=>'Pareci Novo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314050',
            'name'=>'Parobé',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314068',
            'name'=>'Passa Sete',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314076',
            'name'=>'Passo do Sobrado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314100',
            'name'=>'Passo Fundo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314134',
            'name'=>'Paulo Bento',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314159',
            'name'=>'Paverama',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314175',
            'name'=>'Pedras Altas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314209',
            'name'=>'Pedro Osório',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314308',
            'name'=>'Pejuçara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314407',
            'name'=>'Pelotas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314423',
            'name'=>'Picada Café',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314456',
            'name'=>'Pinhal',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314464',
            'name'=>'Pinhal da Serra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314472',
            'name'=>'Pinhal Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314498',
            'name'=>'Pinheirinho do Vale',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314506',
            'name'=>'Pinheiro Machado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314548',
            'name'=>'Pinto Bandeira',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314555',
            'name'=>'Pirapó',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314605',
            'name'=>'Piratini',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314704',
            'name'=>'Planalto',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314753',
            'name'=>'Poço das Antas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314779',
            'name'=>'Pontão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314787',
            'name'=>'Ponte Preta',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314803',
            'name'=>'Portão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4314902',
            'name'=>'Porto Alegre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315008',
            'name'=>'Porto Lucena',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315057',
            'name'=>'Porto Mauá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315073',
            'name'=>'Porto Vera Cruz',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315107',
            'name'=>'Porto Xavier',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315131',
            'name'=>'Pouso Novo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315149',
            'name'=>'Presidente Lucena',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315156',
            'name'=>'Progresso',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315172',
            'name'=>'Protásio Alves',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315206',
            'name'=>'Putinga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315305',
            'name'=>'Quaraí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315313',
            'name'=>'Quatro Irmãos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315321',
            'name'=>'Quevedos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315354',
            'name'=>'Quinze de Novembro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315404',
            'name'=>'Redentora',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315453',
            'name'=>'Relvado',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315503',
            'name'=>'Restinga Seca',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315552',
            'name'=>'Rio dos Índios',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315602',
            'name'=>'Rio Grande',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315701',
            'name'=>'Rio Pardo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315750',
            'name'=>'Riozinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315800',
            'name'=>'Roca Sales',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315909',
            'name'=>'Rodeio Bonito',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4315958',
            'name'=>'Rolador',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316006',
            'name'=>'Rolante',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316105',
            'name'=>'Ronda Alta',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316204',
            'name'=>'Rondinha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316303',
            'name'=>'Roque Gonzales',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316402',
            'name'=>'Rosário do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316428',
            'name'=>'Sagrada Família',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316436',
            'name'=>'Saldanha Marinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316451',
            'name'=>'Salto do Jacuí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316477',
            'name'=>'Salvador das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316501',
            'name'=>'Salvador do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316600',
            'name'=>'Sananduva',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316709',
            'name'=>'Santa Bárbara do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316733',
            'name'=>'Santa Cecília do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316758',
            'name'=>'Santa Clara do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316808',
            'name'=>'Santa Cruz do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316907',
            'name'=>'Santa Maria',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316956',
            'name'=>'Santa Maria do Herval',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4316972',
            'name'=>'Santa Margarida do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317004',
            'name'=>'Santana da Boa Vista',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317103',
            'name'=>'Sant Ana do Livramento',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317202',
            'name'=>'Santa Rosa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317251',
            'name'=>'Santa Tereza',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317301',
            'name'=>'Santa Vitória do Palmar',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317400',
            'name'=>'Santiago',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317509',
            'name'=>'Santo Ângelo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317558',
            'name'=>'Santo Antônio do Palma',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317608',
            'name'=>'Santo Antônio da Patrulha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317707',
            'name'=>'Santo Antônio das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317756',
            'name'=>'Santo Antônio do Planalto',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317806',
            'name'=>'Santo Augusto',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317905',
            'name'=>'Santo Cristo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4317954',
            'name'=>'Santo Expedito do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318002',
            'name'=>'São Borja',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318051',
            'name'=>'São Domingos do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318101',
            'name'=>'São Francisco de Assis',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318200',
            'name'=>'São Francisco de Paula',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318309',
            'name'=>'São Gabriel',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318408',
            'name'=>'São Jerônimo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318424',
            'name'=>'São João da Urtiga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318432',
            'name'=>'São João do Polêsine',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318440',
            'name'=>'São Jorge',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318457',
            'name'=>'São José das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318465',
            'name'=>'São José do Herval',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318481',
            'name'=>'São José do Hortêncio',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318499',
            'name'=>'São José do Inhacorá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318507',
            'name'=>'São José do Norte',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318606',
            'name'=>'São José do Ouro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318614',
            'name'=>'São José do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318622',
            'name'=>'São José dos Ausentes',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318705',
            'name'=>'São Leopoldo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318804',
            'name'=>'São Lourenço do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4318903',
            'name'=>'São Luiz Gonzaga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319000',
            'name'=>'São Marcos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319109',
            'name'=>'São Martinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319125',
            'name'=>'São Martinho da Serra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319158',
            'name'=>'São Miguel das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319208',
            'name'=>'São Nicolau',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319307',
            'name'=>'São Paulo das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319356',
            'name'=>'São Pedro da Serra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319364',
            'name'=>'São Pedro das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319372',
            'name'=>'São Pedro do Butiá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319406',
            'name'=>'São Pedro do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319505',
            'name'=>'São Sebastião do Caí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319604',
            'name'=>'São Sepé',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319703',
            'name'=>'São Valentim',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319711',
            'name'=>'São Valentim do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319737',
            'name'=>'São Valério do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319752',
            'name'=>'São Vendelino',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319802',
            'name'=>'São Vicente do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4319901',
            'name'=>'Sapiranga',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320008',
            'name'=>'Sapucaia do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320107',
            'name'=>'Sarandi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320206',
            'name'=>'Seberi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320230',
            'name'=>'Sede Nova',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320263',
            'name'=>'Segredo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320305',
            'name'=>'Selbach',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320321',
            'name'=>'Senador Salgado Filho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320354',
            'name'=>'Sentinela do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320404',
            'name'=>'Serafina Corrêa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320453',
            'name'=>'Sério',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320503',
            'name'=>'Sertão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320552',
            'name'=>'Sertão Santana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320578',
            'name'=>'Sete de Setembro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320602',
            'name'=>'Severiano de Almeida',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320651',
            'name'=>'Silveira Martins',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320677',
            'name'=>'Sinimbu',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320701',
            'name'=>'Sobradinho',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320800',
            'name'=>'Soledade',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320859',
            'name'=>'Tabaí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4320909',
            'name'=>'Tapejara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321006',
            'name'=>'Tapera',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321105',
            'name'=>'Tapes',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321204',
            'name'=>'Taquara',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321303',
            'name'=>'Taquari',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321329',
            'name'=>'Taquaruçu do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321352',
            'name'=>'Tavares',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321402',
            'name'=>'Tenente Portela',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321436',
            'name'=>'Terra de Areia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321451',
            'name'=>'Teutônia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321469',
            'name'=>'Tio Hugo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321477',
            'name'=>'Tiradentes do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321493',
            'name'=>'Toropi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321501',
            'name'=>'Torres',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321600',
            'name'=>'Tramandaí',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321626',
            'name'=>'Travesseiro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321634',
            'name'=>'Três Arroios',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321667',
            'name'=>'Três Cachoeiras',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321709',
            'name'=>'Três Coroas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321808',
            'name'=>'Três de Maio',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321832',
            'name'=>'Três Forquilhas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321857',
            'name'=>'Três Palmeiras',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321907',
            'name'=>'Três Passos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4321956',
            'name'=>'Trindade do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322004',
            'name'=>'Triunfo',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322103',
            'name'=>'Tucunduva',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322152',
            'name'=>'Tunas',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322186',
            'name'=>'Tupanci do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322202',
            'name'=>'Tupanciretã',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322251',
            'name'=>'Tupandi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322301',
            'name'=>'Tuparendi',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322327',
            'name'=>'Turuçu',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322343',
            'name'=>'Ubiretama',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322350',
            'name'=>'União da Serra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322376',
            'name'=>'Unistalda',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322400',
            'name'=>'Uruguaiana',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322509',
            'name'=>'Vacaria',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322525',
            'name'=>'Vale Verde',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322533',
            'name'=>'Vale do Sol',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322541',
            'name'=>'Vale Real',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322558',
            'name'=>'Vanini',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322608',
            'name'=>'Venâncio Aires',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322707',
            'name'=>'Vera Cruz',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322806',
            'name'=>'Veranópolis',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322855',
            'name'=>'Vespasiano Correa',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4322905',
            'name'=>'Viadutos',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323002',
            'name'=>'Viamão',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323101',
            'name'=>'Vicente Dutra',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323200',
            'name'=>'Victor Graeff',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323309',
            'name'=>'Vila Flores',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323358',
            'name'=>'Vila Lângaro',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323408',
            'name'=>'Vila Maria',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323457',
            'name'=>'Vila Nova do Sul',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323507',
            'name'=>'Vista Alegre',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323606',
            'name'=>'Vista Alegre do Prata',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323705',
            'name'=>'Vista Gaúcha',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323754',
            'name'=>'Vitória das Missões',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323770',
            'name'=>'Westfalia',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'4323804',
            'name'=>'Xangri-lá',
            'state_id'=> State::where('uf','RS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000203',
            'name'=>'Água Clara',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000252',
            'name'=>'Alcinópolis',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000609',
            'name'=>'Amambai',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000708',
            'name'=>'Anastácio',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000807',
            'name'=>'Anaurilândia',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000856',
            'name'=>'Angélica',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5000906',
            'name'=>'Antônio João',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5001003',
            'name'=>'Aparecida do Taboado',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5001102',
            'name'=>'Aquidauana',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5001243',
            'name'=>'Aral Moreira',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5001508',
            'name'=>'Bandeirantes',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5001904',
            'name'=>'Bataguassu',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002001',
            'name'=>'Batayporã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002100',
            'name'=>'Bela Vista',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002159',
            'name'=>'Bodoquena',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002209',
            'name'=>'Bonito',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002308',
            'name'=>'Brasilândia',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002407',
            'name'=>'Caarapó',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002605',
            'name'=>'Camapuã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002704',
            'name'=>'Campo Grande',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002803',
            'name'=>'Caracol',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002902',
            'name'=>'Cassilândia',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5002951',
            'name'=>'Chapadão do Sul',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003108',
            'name'=>'Corguinho',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003157',
            'name'=>'Coronel Sapucaia',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003207',
            'name'=>'Corumbá',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003256',
            'name'=>'Costa Rica',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003306',
            'name'=>'Coxim',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003454',
            'name'=>'Deodápolis',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003488',
            'name'=>'Dois Irmãos do Buriti',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003504',
            'name'=>'Douradina',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003702',
            'name'=>'Dourados',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003751',
            'name'=>'Eldorado',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003801',
            'name'=>'Fátima do Sul',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5003900',
            'name'=>'Figueirão',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004007',
            'name'=>'Glória de Dourados',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004106',
            'name'=>'Guia Lopes da Laguna',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004304',
            'name'=>'Iguatemi',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004403',
            'name'=>'Inocência',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004502',
            'name'=>'Itaporã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004601',
            'name'=>'Itaquiraí',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004700',
            'name'=>'Ivinhema',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004809',
            'name'=>'Japorã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5004908',
            'name'=>'Jaraguari',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005004',
            'name'=>'Jardim',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005103',
            'name'=>'Jateí',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005152',
            'name'=>'Juti',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005202',
            'name'=>'Ladário',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005251',
            'name'=>'Laguna Carapã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005400',
            'name'=>'Maracaju',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005608',
            'name'=>'Miranda',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005681',
            'name'=>'Mundo Novo',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005707',
            'name'=>'Naviraí',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5005806',
            'name'=>'Nioaque',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006002',
            'name'=>'Nova Alvorada do Sul',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006200',
            'name'=>'Nova Andradina',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006259',
            'name'=>'Novo Horizonte do Sul',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006275',
            'name'=>'Paraíso das Águas',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006309',
            'name'=>'Paranaíba',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006358',
            'name'=>'Paranhos',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006408',
            'name'=>'Pedro Gomes',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006606',
            'name'=>'Ponta Porã',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5006903',
            'name'=>'Porto Murtinho',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007109',
            'name'=>'Ribas do Rio Pardo',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007208',
            'name'=>'Rio Brilhante',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007307',
            'name'=>'Rio Negro',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007406',
            'name'=>'Rio Verde de Mato Grosso',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007505',
            'name'=>'Rochedo',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007554',
            'name'=>'Santa Rita do Pardo',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007695',
            'name'=>'São Gabriel do Oeste',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007703',
            'name'=>'Sete Quedas',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007802',
            'name'=>'Selvíria',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007901',
            'name'=>'Sidrolândia',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007935',
            'name'=>'Sonora',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007950',
            'name'=>'Tacuru',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5007976',
            'name'=>'Taquarussu',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5008008',
            'name'=>'Terenos',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5008305',
            'name'=>'Três Lagoas',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5008404',
            'name'=>'Vicentina',
            'state_id'=> State::where('uf','MS')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100102',
            'name'=>'Acorizal',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100201',
            'name'=>'Água Boa',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100250',
            'name'=>'Alta Floresta',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100300',
            'name'=>'Alto Araguaia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100359',
            'name'=>'Alto Boa Vista',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100409',
            'name'=>'Alto Garças',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100508',
            'name'=>'Alto Paraguai',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100607',
            'name'=>'Alto Taquari',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5100805',
            'name'=>'Apiacás',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101001',
            'name'=>'Araguaiana',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101209',
            'name'=>'Araguainha',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101258',
            'name'=>'Araputanga',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101308',
            'name'=>'Arenápolis',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101407',
            'name'=>'Aripuanã',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101605',
            'name'=>'Barão de Melgaço',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101704',
            'name'=>'Barra do Bugres',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101803',
            'name'=>'Barra do Garças',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101852',
            'name'=>'Bom Jesus do Araguaia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5101902',
            'name'=>'Brasnorte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102504',
            'name'=>'Cáceres',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102603',
            'name'=>'Campinápolis',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102637',
            'name'=>'Campo Novo do Parecis',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102678',
            'name'=>'Campo Verde',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102686',
            'name'=>'Campos de Júlio',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102694',
            'name'=>'Canabrava do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102702',
            'name'=>'Canarana',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102793',
            'name'=>'Carlinda',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5102850',
            'name'=>'Castanheira',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103007',
            'name'=>'Chapada dos Guimarães',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103056',
            'name'=>'Cláudia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103106',
            'name'=>'Cocalinho',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103205',
            'name'=>'Colíder',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103254',
            'name'=>'Colniza',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103304',
            'name'=>'Comodoro',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103353',
            'name'=>'Confresa',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103361',
            'name'=>'Conquista Do Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103379',
            'name'=>'Cotriguaçu',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103403',
            'name'=>'Cuiabá',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103437',
            'name'=>'Curvelândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103452',
            'name'=>'Denise',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103502',
            'name'=>'Diamantino',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103601',
            'name'=>'Dom Aquino',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103700',
            'name'=>'Feliz Natal',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103809',
            'name'=>'Figueirópolis Do Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103858',
            'name'=>'Gaúcha do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103908',
            'name'=>'General Carneiro',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5103957',
            'name'=>'Glória Do Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104104',
            'name'=>'Guarantã do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104203',
            'name'=>'Guiratinga',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104500',
            'name'=>'Indiavaí',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104526',
            'name'=>'Ipiranga do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104542',
            'name'=>'Itanhangá',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104559',
            'name'=>'Itaúba',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104609',
            'name'=>'Itiquira',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104807',
            'name'=>'Jaciara',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5104906',
            'name'=>'Jangada',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105002',
            'name'=>'Jauru',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105101',
            'name'=>'Juara',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105150',
            'name'=>'Juína',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105176',
            'name'=>'Juruena',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105200',
            'name'=>'Juscimeira',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105234',
            'name'=>'Lambari Do Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105259',
            'name'=>'Lucas do Rio Verde',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105309',
            'name'=>'Luciara',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105507',
            'name'=>'Vila Bela da Santíssima Trindade',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105580',
            'name'=>'Marcelândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105606',
            'name'=>'Matupá',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105622',
            'name'=>'Mirassol Do Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5105903',
            'name'=>'Nobres',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106000',
            'name'=>'Nortelândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106109',
            'name'=>'Nossa Senhora do Livramento',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106158',
            'name'=>'Nova Bandeirantes',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106174',
            'name'=>'Nova Nazaré',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106182',
            'name'=>'Nova Lacerda',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106190',
            'name'=>'Nova Santa Helena',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106208',
            'name'=>'Nova Brasilândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106216',
            'name'=>'Nova Canaã do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106224',
            'name'=>'Nova Mutum',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106232',
            'name'=>'Nova Olímpia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106240',
            'name'=>'Nova Ubiratã',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106257',
            'name'=>'Nova Xavantina',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106265',
            'name'=>'Novo Mundo',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106273',
            'name'=>'Novo Horizonte do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106281',
            'name'=>'Novo São Joaquim',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106299',
            'name'=>'Paranaíta',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106307',
            'name'=>'Paranatinga',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106315',
            'name'=>'Novo Santo Antônio',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106372',
            'name'=>'Pedra Preta',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106422',
            'name'=>'Peixoto de Azevedo',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106455',
            'name'=>'Planalto da Serra',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106505',
            'name'=>'Poconé',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106653',
            'name'=>'Pontal do Araguaia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106703',
            'name'=>'Ponte Branca',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106752',
            'name'=>'Pontes e Lacerda',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106778',
            'name'=>'Porto Alegre do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106802',
            'name'=>'Porto dos Gaúchos',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106828',
            'name'=>'Porto Esperidião',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5106851',
            'name'=>'Porto Estrela',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107008',
            'name'=>'Poxoréo',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107040',
            'name'=>'Primavera do Leste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107065',
            'name'=>'Querência',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107107',
            'name'=>'São José dos Quatro Marcos',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107156',
            'name'=>'Reserva do Cabaçal',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107180',
            'name'=>'Ribeirão Cascalheira',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107198',
            'name'=>'Ribeirãozinho',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107206',
            'name'=>'Rio Branco',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107248',
            'name'=>'Santa Carmem',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107263',
            'name'=>'Santo Afonso',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107297',
            'name'=>'São José do Povo',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107305',
            'name'=>'São José do Rio Claro',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107354',
            'name'=>'São José do Xingu',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107404',
            'name'=>'São Pedro da Cipa',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107578',
            'name'=>'Rondolândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107602',
            'name'=>'Rondonópolis',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107701',
            'name'=>'Rosário Oeste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107743',
            'name'=>'Santa Cruz do Xingu',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107750',
            'name'=>'Salto do Céu',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107768',
            'name'=>'Santa Rita do Trivelato',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107776',
            'name'=>'Santa Terezinha',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107792',
            'name'=>'Santo Antônio do Leste',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107800',
            'name'=>'Santo Antônio do Leverger',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107859',
            'name'=>'São Félix do Araguaia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107875',
            'name'=>'Sapezal',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107883',
            'name'=>'Serra Nova Dourada',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107909',
            'name'=>'Sinop',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107925',
            'name'=>'Sorriso',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107941',
            'name'=>'Tabaporã',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5107958',
            'name'=>'Tangará da Serra',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108006',
            'name'=>'Tapurah',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108055',
            'name'=>'Terra Nova do Norte',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108105',
            'name'=>'Tesouro',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108204',
            'name'=>'Torixoréu',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108303',
            'name'=>'União do Sul',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108352',
            'name'=>'Vale de São Domingos',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108402',
            'name'=>'Várzea Grande',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108501',
            'name'=>'Vera',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108600',
            'name'=>'Vila Rica',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108808',
            'name'=>'Nova Guarita',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108857',
            'name'=>'Nova Marilândia',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108907',
            'name'=>'Nova Maringá',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5108956',
            'name'=>'Nova Monte Verde',
            'state_id'=> State::where('uf','MT')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200050',
            'name'=>'Abadia de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200100',
            'name'=>'Abadiânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200134',
            'name'=>'Acreúna',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200159',
            'name'=>'Adelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200175',
            'name'=>'Água Fria de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200209',
            'name'=>'Água Limpa',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200258',
            'name'=>'Águas Lindas de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200308',
            'name'=>'Alexânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200506',
            'name'=>'Aloândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200555',
            'name'=>'Alto Horizonte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200605',
            'name'=>'Alto Paraíso de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200803',
            'name'=>'Alvorada do Norte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200829',
            'name'=>'Amaralina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200852',
            'name'=>'Americano do Brasil',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5200902',
            'name'=>'Amorinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201108',
            'name'=>'Anápolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201207',
            'name'=>'Anhanguera',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201306',
            'name'=>'Anicuns',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201405',
            'name'=>'Aparecida de Goiânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201454',
            'name'=>'Aparecida do Rio Doce',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201504',
            'name'=>'Aporé',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201603',
            'name'=>'Araçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201702',
            'name'=>'Aragarças',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5201801',
            'name'=>'Aragoiânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5202155',
            'name'=>'Araguapaz',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5202353',
            'name'=>'Arenópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5202502',
            'name'=>'Aruanã',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5202601',
            'name'=>'Aurilândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5202809',
            'name'=>'Avelinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203104',
            'name'=>'Baliza',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203203',
            'name'=>'Barro Alto',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203302',
            'name'=>'Bela Vista de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203401',
            'name'=>'Bom Jardim de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203500',
            'name'=>'Bom Jesus de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203559',
            'name'=>'Bonfinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203575',
            'name'=>'Bonópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203609',
            'name'=>'Brazabrantes',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203807',
            'name'=>'Britânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203906',
            'name'=>'Buriti Alegre',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203939',
            'name'=>'Buriti de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5203962',
            'name'=>'Buritinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204003',
            'name'=>'Cabeceiras',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204102',
            'name'=>'Cachoeira Alta',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204201',
            'name'=>'Cachoeira de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204250',
            'name'=>'Cachoeira Dourada',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204300',
            'name'=>'Caçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204409',
            'name'=>'Caiapônia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204508',
            'name'=>'Caldas Novas',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204557',
            'name'=>'Caldazinha',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204607',
            'name'=>'Campestre de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204656',
            'name'=>'Campinaçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204706',
            'name'=>'Campinorte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204805',
            'name'=>'Campo Alegre de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204854',
            'name'=>'Campo Limpo de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204904',
            'name'=>'Campos Belos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5204953',
            'name'=>'Campos Verdes',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205000',
            'name'=>'Carmo do Rio Verde',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205059',
            'name'=>'Castelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205109',
            'name'=>'Catalão',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205208',
            'name'=>'Caturaí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205307',
            'name'=>'Cavalcante',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205406',
            'name'=>'Ceres',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205455',
            'name'=>'Cezarina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205471',
            'name'=>'Chapadão do Céu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205497',
            'name'=>'Cidade Ocidental',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205513',
            'name'=>'Cocalzinho de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205521',
            'name'=>'Colinas do Sul',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205703',
            'name'=>'Córrego do Ouro',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205802',
            'name'=>'Corumbá de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5205901',
            'name'=>'Corumbaíba',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206206',
            'name'=>'Cristalina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206305',
            'name'=>'Cristianópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206404',
            'name'=>'Crixás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206503',
            'name'=>'Cromínia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206602',
            'name'=>'Cumari',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206701',
            'name'=>'Damianópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206800',
            'name'=>'Damolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5206909',
            'name'=>'Davinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207105',
            'name'=>'Diorama',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207253',
            'name'=>'Doverlândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207352',
            'name'=>'Edealina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207402',
            'name'=>'Edéia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207501',
            'name'=>'Estrela do Norte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207535',
            'name'=>'Faina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207600',
            'name'=>'Fazenda Nova',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207808',
            'name'=>'Firminópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5207907',
            'name'=>'Flores de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208004',
            'name'=>'Formosa',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208103',
            'name'=>'Formoso',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208152',
            'name'=>'Gameleira de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208301',
            'name'=>'Divinópolis de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208400',
            'name'=>'Goianápolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208509',
            'name'=>'Goiandira',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208608',
            'name'=>'Goianésia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208707',
            'name'=>'Goiânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208806',
            'name'=>'Goianira',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5208905',
            'name'=>'Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209101',
            'name'=>'Goiatuba',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209150',
            'name'=>'Gouvelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209200',
            'name'=>'Guapó',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209291',
            'name'=>'Guaraíta',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209408',
            'name'=>'Guarani de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209457',
            'name'=>'Guarinos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209606',
            'name'=>'Heitoraí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209705',
            'name'=>'Hidrolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209804',
            'name'=>'Hidrolina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209903',
            'name'=>'Iaciara',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209937',
            'name'=>'Inaciolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5209952',
            'name'=>'Indiara',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210000',
            'name'=>'Inhumas',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210109',
            'name'=>'Ipameri',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210158',
            'name'=>'Ipiranga de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210208',
            'name'=>'Iporá',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210307',
            'name'=>'Israelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210406',
            'name'=>'Itaberaí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210562',
            'name'=>'Itaguari',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210604',
            'name'=>'Itaguaru',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210802',
            'name'=>'Itajá',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5210901',
            'name'=>'Itapaci',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211008',
            'name'=>'Itapirapuã',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211206',
            'name'=>'Itapuranga',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211305',
            'name'=>'Itarumã',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211404',
            'name'=>'Itauçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211503',
            'name'=>'Itumbiara',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211602',
            'name'=>'Ivolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211701',
            'name'=>'Jandaia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211800',
            'name'=>'Jaraguá',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5211909',
            'name'=>'Jataí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212006',
            'name'=>'Jaupaci',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212055',
            'name'=>'Jesúpolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212105',
            'name'=>'Joviânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212204',
            'name'=>'Jussara',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212253',
            'name'=>'Lagoa Santa',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212303',
            'name'=>'Leopoldo de Bulhões',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212501',
            'name'=>'Luziânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212600',
            'name'=>'Mairipotaba',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212709',
            'name'=>'Mambaí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212808',
            'name'=>'Mara Rosa',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212907',
            'name'=>'Marzagão',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5212956',
            'name'=>'Matrinchã',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213004',
            'name'=>'Maurilândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213053',
            'name'=>'Mimoso de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213087',
            'name'=>'Minaçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213103',
            'name'=>'Mineiros',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213400',
            'name'=>'Moiporá',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213509',
            'name'=>'Monte Alegre de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213707',
            'name'=>'Montes Claros de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213756',
            'name'=>'Montividiu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213772',
            'name'=>'Montividiu do Norte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213806',
            'name'=>'Morrinhos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213855',
            'name'=>'Morro Agudo de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5213905',
            'name'=>'Mossâmedes',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214002',
            'name'=>'Mozarlândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214051',
            'name'=>'Mundo Novo',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214101',
            'name'=>'Mutunópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214408',
            'name'=>'Nazário',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214507',
            'name'=>'Nerópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214606',
            'name'=>'Niquelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214705',
            'name'=>'Nova América',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214804',
            'name'=>'Nova Aurora',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214838',
            'name'=>'Nova Crixás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214861',
            'name'=>'Nova Glória',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214879',
            'name'=>'Nova Iguaçu de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5214903',
            'name'=>'Nova Roma',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215009',
            'name'=>'Nova Veneza',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215207',
            'name'=>'Novo Brasil',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215231',
            'name'=>'Novo Gama',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215256',
            'name'=>'Novo Planalto',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215306',
            'name'=>'Orizona',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215405',
            'name'=>'Ouro Verde de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215504',
            'name'=>'Ouvidor',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215603',
            'name'=>'Padre Bernardo',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215652',
            'name'=>'Palestina de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215702',
            'name'=>'Palmeiras de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215801',
            'name'=>'Palmelo',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5215900',
            'name'=>'Palminópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216007',
            'name'=>'Panamá',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216304',
            'name'=>'Paranaiguara',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216403',
            'name'=>'Paraúna',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216452',
            'name'=>'Perolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216809',
            'name'=>'Petrolina de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5216908',
            'name'=>'Pilar de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217104',
            'name'=>'Piracanjuba',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217203',
            'name'=>'Piranhas',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217302',
            'name'=>'Pirenópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217401',
            'name'=>'Pires do Rio',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217609',
            'name'=>'Planaltina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5217708',
            'name'=>'Pontalina',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218003',
            'name'=>'Porangatu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218052',
            'name'=>'Porteirão',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218102',
            'name'=>'Portelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218300',
            'name'=>'Posse',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218391',
            'name'=>'Professor Jamil',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218508',
            'name'=>'Quirinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218607',
            'name'=>'Rialma',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218706',
            'name'=>'Rianápolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218789',
            'name'=>'Rio Quente',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218805',
            'name'=>'Rio Verde',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5218904',
            'name'=>'Rubiataba',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219001',
            'name'=>'Sanclerlândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219100',
            'name'=>'Santa Bárbara de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219209',
            'name'=>'Santa Cruz de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219258',
            'name'=>'Santa Fé de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219308',
            'name'=>'Santa Helena de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219357',
            'name'=>'Santa Isabel',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219407',
            'name'=>'Santa Rita do Araguaia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219456',
            'name'=>'Santa Rita do Novo Destino',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219506',
            'name'=>'Santa Rosa de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219605',
            'name'=>'Santa Tereza de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219704',
            'name'=>'Santa Terezinha de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219712',
            'name'=>'Santo Antônio da Barra',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219738',
            'name'=>'Santo Antônio de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219753',
            'name'=>'Santo Antônio do Descoberto',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219803',
            'name'=>'São Domingos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5219902',
            'name'=>'São Francisco de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220009',
            'name'=>'São João D Aliança',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220058',
            'name'=>'São João da Paraúna',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220108',
            'name'=>'São Luís de Montes Belos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220157',
            'name'=>'São Luíz do Norte',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220207',
            'name'=>'São Miguel do Araguaia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220264',
            'name'=>'São Miguel do Passa Quatro',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220280',
            'name'=>'São Patrício',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220405',
            'name'=>'São Simão',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220454',
            'name'=>'Senador Canedo',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220504',
            'name'=>'Serranópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220603',
            'name'=>'Silvânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220686',
            'name'=>'Simolândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5220702',
            'name'=>'Sítio D Abadia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221007',
            'name'=>'Taquaral de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221080',
            'name'=>'Teresina de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221197',
            'name'=>'Terezópolis de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221304',
            'name'=>'Três Ranchos',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221403',
            'name'=>'Trindade',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221452',
            'name'=>'Trombas',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221502',
            'name'=>'Turvânia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221551',
            'name'=>'Turvelândia',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221577',
            'name'=>'Uirapuru',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221601',
            'name'=>'Uruaçu',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221700',
            'name'=>'Uruana',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221809',
            'name'=>'Urutaí',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221858',
            'name'=>'Valparaíso de Goiás',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5221908',
            'name'=>'Varjão',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5222005',
            'name'=>'Vianópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5222054',
            'name'=>'Vicentinópolis',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5222203',
            'name'=>'Vila Boa',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5222302',
            'name'=>'Vila Propício',
            'state_id'=> State::where('uf','GO')->first()->id,

        ] );



        City::firstOrCreate( [
            'ibge'=>'5300108',
            'name'=>'Brasília',
            'state_id'=> State::where('uf','DF')->first()->id,

        ] );
    }
}
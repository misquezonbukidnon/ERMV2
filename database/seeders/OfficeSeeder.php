<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            [
                'name' => 'Bereau Of Fire Protection',
                'abbr' => 'BFP'
            ],
            [
                'name' => 'Bereau Of Internal Revenue ',
                'abbr' => 'BIR'
            ],
            [
                'name' => 'Business Permits And Licensing Division',
                'abbr' => 'BPLD'
            ],
            [
                'name' => 'Bukidnon State University',
                'abbr' => 'BUKSU'
            ],
            [
                'name' => 'Commission On Audit',
                'abbr' => 'COA'
            ],
            [
                'name' => 'Commission On Elections',
                'abbr' => 'COMELEC'
            ],
            [
                'name' => 'Department Of Interior And Local Government',
                'abbr' => 'DILG'
            ],
            [
                'name' => 'Human Resourse Management Office',
                'abbr' => 'HRMO'
            ],
            [
                'name' => 'Local School Board',
                'abbr' => 'LSB'
            ],
            [
                'name' => 'Municipal Accounting Office',
                'abbr' => 'MACCO'
            ],
            [
                'name' => 'Municipal Agriculture Office',
                'abbr' => 'MAO'
            ],
            [
                'name' => "Municipal Assessor's Office",
                'abbr' => 'MASSO'
            ],
            [
                'name' => 'Municipal Budget Office',
                'abbr' => 'MBO'
            ],
            [
                'name' => 'Municipal Civil Registrar',
                'abbr' => 'MCR'
            ],
            [
                'name' => 'Municipal Enterprises Management Office',
                'abbr' => 'MEMO'
            ],
            [
                'name' => 'Municipal Enterprises Management Office',
                'abbr' => 'MEMO Lowanlowan'
            ],
            [
                'name' => 'Municipal Enterprises Management Office',
                'abbr' => 'MEMO Market'
            ],
            [
                'name' => 'Municipal Enterprises Management Office',
                'abbr' => 'MEMO Municipal Cemetery'
            ],
            [
                'name' => 'Municipal Enterprises Management Office',
                'abbr' => 'MEMO Slaughterhouse'
            ],
            [
                'name' => 'Municipal Environment And Natural Resources Office',
                'abbr' => 'MENRO'
            ],
            [
                'name' => 'Material Recovery Facilities',
                'abbr' => 'MENRO MRF'
            ],
            [
                'name' => "Municipal Engineer's Office",
                'abbr' => 'MEO'
            ],
            [
                'name' => 'Maternity Care Center',
                'abbr' => 'MHO MCC'
            ],
            [
                'name' => 'Municipal Health Office',
                'abbr' => 'MHO Municipal Health Office'
            ],
            [
                'name' => 'Isolation Unit',
                'abbr' => 'MHO Isolation Unit'
            ],
            [
                'name' => "Minicipal Mayor's Office",
                'abbr' => 'MMO'
            ],
            [
                'name' => 'Barangay Affairs',
                'abbr' => 'MMO Barangay Affairs'
            ],
            [
                'name' => 'Purchasing Division',
                'abbr' => 'MMO Purchasing Division'
            ],
            [
                'name' => 'Tourism And Civil Affairs Section',
                'abbr' => 'MMO Tourism And Civil Affairs Section'
            ],
            [
                'name' => 'Bids And Award Committee',
                'abbr' => 'MMO BAC'
            ],
            [
                'name' => 'Business Permits And Licenses Division',
                'abbr' => 'MMO BPLD'
            ],
            [
                'name' => 'General Services Office',
                'abbr' => 'MMO GSO'
            ],
            [
                'name' => 'Livelihood Division',
                'abbr' => 'MMO Livelihood Division'
            ],
            [
                'name' => "Mayor's Action Center",
                'abbr' => 'MMO MAC'
            ],
            [
                'name' => 'Management Information System Division',
                'abbr' => 'MMO MIS'
            ],
            [
                'name' => 'Nutrition Division',
                'abbr' => 'MMO Nutrition Division'
            ],
            [
                'name' => 'Public Affairs, Information And Assistance Division',
                'abbr' => 'MMO PAIAD'
            ],
            [
                'name' => 'Public Employment Service Office',
                'abbr' => 'MMO PESO'
            ],
            [
                'name' => 'Population Development Division',
                'abbr' => 'MMO POPDEV'
            ],
            [
                'name' => 'Personal Staff',
                'abbr' => 'MMO PS'
            ],
            [
                'name' => 'Service Vehicle Pool',
                'abbr' => 'MMO Service Vehicle Pool'
            ],
            [
                'name' => 'Shooting Range',
                'abbr' => 'MMO Shooting Range'
            ],
            [
                'name' => 'Municipal Planning And Development Office',
                'abbr' => 'MPDO'
            ],
            [
                'name' => 'Municipal Public Safety Office',
                'abbr' => 'MPSO'
            ],
            [
                'name' => 'Civil Security Unit',
                'abbr' => 'MPSO CSU'
            ],
            [
                'name' => 'Local Enforcement',
                'abbr' => 'MPSO Local Enforcement'
            ],
            [
                'name' => 'Municipal Disaster and Risk Reduction Manangement Office',
                'abbr' => 'MPSO MDRRMO'
            ],
            [
                'name' => 'Trafic Management Group',
                'abbr' => 'MPSO TMG'
            ],
            [
                'name' => 'Municipal Social Welfare And Development Office',
                'abbr' => 'MSWDO'
            ],
            [
                'name' => 'MSWDO-KALAHI-CIDSS',
                'abbr' => 'MSWDO-KALAHI-CIDSS'
            ],
            [
                'name' => "Municipal Treasurers Office",
                'abbr' => 'MTO'
            ],
            [
                'name' => "Public Attorney's Office",
                'abbr' => 'PAO'
            ],
            [
                'name' => 'Post Office',
                'abbr' => 'PHILPOST'
            ],
            [
                'name' => 'Philippine National Police',
                'abbr' => 'PNP'
            ],
            [
                'name' => 'Sangguniang Bayan Office',
                'abbr' => 'SBO'
            ],
            
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Clientes de referência baseados no dump de produção (dados sanitizados).
     * Não é uma cópia exata: serve apenas para popular o ambiente local com
     * casos realistas (com e sem logo, com e sem external_id/cnpj).
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'external_id'  => '12345',
                'company_name' => 'Xamps Tech',
                'phone'        => '(15) 99745-4531',
                'email'        => 'contato@xampstech.com.br',
                'cnpj'         => '12.513.212/0001-14',
                'zip_code'     => '18113400',
                'address'      => 'Rua Odete Gori Bicudo',
                'number'       => '601',
                'city'         => 'Votorantim',
                'state'        => 'SP',
                'logo'         => null,
            ],
            [
                'external_id'  => '2822',
                'company_name' => 'Tagui Brasil Cereais LTDA',
                'phone'        => '(15) 99100-7713',
                'email'        => 'faturamento@taguibrasil.com.br',
                'cnpj'         => '23.499.753/0003-50',
                'zip_code'     => '18207-330',
                'address'      => 'Rua Diácono Antônio Nunes Sobrinho',
                'number'       => '2599',
                'city'         => 'Itapetininga',
                'state'        => 'SP',
                'logo'         => null,
            ],
            [
                'external_id'  => '8373',
                'company_name' => 'Julios Tec',
                'phone'        => '(15) 99100-7713',
                'email'        => 'suporte@juliostec.com.br',
                'cnpj'         => '92.837.748/0001-94',
                'zip_code'     => '18206635',
                'address'      => 'Rua Darci Coelho de Oliveira',
                'number'       => '361',
                'city'         => 'Itapetininga',
                'state'        => 'SP',
                'logo'         => null,
            ],
            [
                // Cliente sem external_id / telefone / cnpj — caso mínimo
                'external_id'  => null,
                'company_name' => 'Associação de Moradores do Residencial Golden Ville',
                'phone'        => null,
                'email'        => 'svrgville@gmail.com',
                'cnpj'         => '18065646000112',
                'zip_code'     => '18214-834',
                'address'      => 'Rua Benedicto Garcia de Oliveira',
                'number'       => '184',
                'city'         => 'Itapetininga',
                'state'        => 'SP',
                'logo'         => null,
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['company_name' => $customer['company_name']],
                $customer
            );
        }
    }
}

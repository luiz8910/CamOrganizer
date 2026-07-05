<?php

namespace Database\Seeders;

use App\Models\AccessEquip;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\MultipleFieldsEquip;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Equipamentos de referência baseados no dump de produção.
     *
     * Cada item cria o Equipment e, quando aplicável, seus satélites:
     *  - access_equip           (usuários de acesso do equipamento)
     *  - multiple_fields_equips (MAC / IP / máscara / gateway)
     *
     * Tipos de device: 1=DVR, 2=Câmera, 3=Roteador.
     * Não é uma cópia exata do dump — apenas casos realistas para dev.
     *
     * @return void
     */
    public function run()
    {
        // Resolve os clientes pelo nome (os IDs podem variar entre ambientes).
        $xamps  = Customer::where('company_name', 'Xamps Tech')->first();
        $tagui  = Customer::where('company_name', 'Tagui Brasil Cereais LTDA')->first();
        $julios = Customer::where('company_name', 'Julios Tec')->first();
        $golden = Customer::where('company_name', 'like', 'Associação de Moradores%')->first();

        $equipments = [
            [
                'device_id'             => 1, // DVR
                'customer'              => $xamps,
                'brand'                 => 'Intelbras',
                'model'                 => 'VIP 5220D',
                'serial'                => 'IN4567XCV78901',
                'status'                => 'active',
                'port'                  => '9090',
                'email'                 => 'contato@xampstech.com.br',
                'phone'                 => '(11) 91234-5678',
                'ddns'                  => 'dvr01.myddns.com',
                'access_ip'             => '203.0.113.101',
                'hd_brand'              => 'Hitachi',
                'storage_capacity'      => '1TB',
                'installation_location' => 'Sala de Controle, Bloco B',
                'description'           => 'DVR Intelbras principal',
                'access'                => [
                    ['username' => 'Usuario DVR', 'password' => 'dvr123', 'group' => 'DVR'],
                ],
                'network'               => [
                    ['mac' => '05:5E:7F:9A:1B:2C', 'ip' => '10.0.0.101', 'mask' => '255.255.255.0', 'gateway' => '10.0.0.1'],
                ],
            ],
            [
                'device_id'             => 2, // Câmera
                'customer'              => $xamps,
                'brand'                 => 'Hikvision',
                'model'                 => 'DS-2CD2143G0-I',
                'serial'                => 'HKV8832PL0',
                'status'                => 'active',
                'port'                  => null,
                'email'                 => 'contato@xampstech.com.br',
                'phone'                 => '(11) 03322-4567',
                'ddns'                  => null,
                'access_ip'             => '198.51.100.102',
                'hd_brand'              => null,
                'storage_capacity'      => null,
                'installation_location' => 'Unidade Jaguariúna - Portaria Lateral',
                'description'           => 'Agendada manutenção preventiva.',
                'access'                => [
                    ['username' => 'User camera', 'password' => 'camera123', 'group' => 'Camera'],
                    ['username' => 'User teste', 'password' => 'camera1234', 'group' => 'Admin'],
                ],
                'network'               => [
                    ['mac' => 'AA:BB:CC:DD:EE:FF', 'ip' => '10.0.0.12', 'mask' => '255.255.255.0', 'gateway' => '10.0.0.1'],
                ],
            ],
            [
                'device_id'             => 1, // DVR
                'customer'              => $tagui,
                'brand'                 => 'Intelbras',
                'model'                 => 'MHDX 3202',
                'serial'                => 'INT-MHDX3202-2Q4E',
                'status'                => 'active',
                'port'                  => '37777',
                'email'                 => 'faturamento@taguibrasil.com.br',
                'phone'                 => '(15) 99100-7713',
                'ddns'                  => null,
                'access_ip'             => '192.168.10.36',
                'hd_brand'              => 'WD',
                'storage_capacity'      => '6TB',
                'installation_location' => 'Rack 01',
                'description'           => 'DVR sem fonte original',
                'access'                => [
                    ['username' => 'admin', 'password' => 'JF@tec200', 'group' => 'admin'],
                    ['username' => 'operador', 'password' => 'op@2026', 'group' => 'user'],
                ],
                'network'               => [
                    ['mac' => '62:02:60:20:65:19', 'ip' => '192.168.10.25', 'mask' => '255.255.255.0', 'gateway' => '192.168.10.1'],
                ],
            ],
            [
                'device_id'             => 1, // DVR
                'customer'              => $julios,
                'brand'                 => 'Intelbras',
                'model'                 => 'MHDX 1108',
                'serial'                => 'INT-MHDX1108-7K2Q9A',
                'status'                => 'active',
                'port'                  => null,
                'email'                 => 'suporte@juliostec.com.br',
                'phone'                 => '(15) 99100-7713',
                'ddns'                  => null,
                'access_ip'             => '192.168.10.50',
                'hd_brand'              => null,
                'storage_capacity'      => null,
                'installation_location' => 'Rack da Loja',
                'description'           => '8 canais; gravação 24/7; revisar HD a cada 6 meses.',
                'access'                => [
                    ['username' => 'admin', 'password' => 'Adm!nDVR2026', 'group' => 'Administrators'],
                ],
                'network'               => [
                    ['mac' => '02:6A:3D:10:9B:21', 'ip' => '192.168.10.50', 'mask' => '255.255.255.0', 'gateway' => '192.168.10.1'],
                ],
            ],
            [
                'device_id'             => 2, // Câmera
                'customer'              => $golden,
                'brand'                 => 'Intelbras',
                'model'                 => 'VIP-1130-B-G4',
                'serial'                => 'UESL3108153I2',
                'status'                => 'active',
                'port'                  => null,
                'email'                 => 'svrgville@gmail.com',
                'phone'                 => '(15) 99100-7713',
                'ddns'                  => null,
                'access_ip'             => '10.0.20.69',
                'hd_brand'              => null,
                'storage_capacity'      => null,
                'installation_location' => 'Placa traseira - entrada morador',
                'description'           => 'Atualizado para a última versão.',
                'access'                => [
                    ['username' => 'admin', 'password' => 'gville@**2026', 'group' => 'admin'],
                ],
                'network'               => [
                    ['mac' => '10:0A:20:00:00:69', 'ip' => '10.0.20.69', 'mask' => '255.255.255.0', 'gateway' => '10.0.20.1'],
                ],
            ],
        ];

        foreach ($equipments as $data) {
            $customer = $data['customer'];

            // Sem o cliente correspondente não há como vincular o equipamento.
            if (! $customer) {
                continue;
            }

            $access  = $data['access'] ?? [];
            $network = $data['network'] ?? [];
            unset($data['customer'], $data['access'], $data['network']);

            $data['customer_id'] = $customer->id;

            $equipment = Equipment::updateOrCreate(
                ['serial' => $data['serial']],
                $data
            );

            foreach ($access as $acc) {
                AccessEquip::updateOrCreate(
                    ['equip_id' => $equipment->id, 'username' => $acc['username']],
                    array_merge($acc, [
                        'equip_id'    => $equipment->id,
                        'customer_id' => $customer->id,
                    ])
                );
            }

            foreach ($network as $net) {
                MultipleFieldsEquip::updateOrCreate(
                    ['equip_id' => $equipment->id, 'mac' => $net['mac']],
                    array_merge($net, [
                        'equip_id'    => $equipment->id,
                        'customer_id' => $customer->id,
                        'device_id'   => $data['device_id'],
                    ])
                );
            }
        }
    }
}

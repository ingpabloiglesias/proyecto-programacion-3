<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;

/**
 * Users seed.
 */
class DatabaseSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $perfil_id = Text::UUID();
        $data = [
            'id' => $perfil_id,
            'nombre'   => 'Administrador',
            'apellido'   => 'Maestro',
            'dni'       => '111111111',
            'imagen'       => '',
            'fecha_nacimiento'  => date("Y-m-d H:i:s"),
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s")
        ];

        $table = $this->table('user_profiles');
        $table->truncate();
        $table->insert($data)->save();

        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('admin');
        $admin_id = Text::UUID();
        $data = [
            'id' => $admin_id,
            'username'   => 'admin',
            'password'   => $password,
            'email'       => 'admin@admin.com',
            'perfil_id'  => $perfil_id,
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s")
        ];
        $table = $this->table('users');
        $table->truncate();
        $table->insert($data)->save();

        $campeonatoData = [];
        $campeonatosIds = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++)
        {
            $id = Text::UUID();
            if ($i === 0) {
                $nombre = "Primer campeonato del mundo mundial";
            } else {
                $nombre = $faker->sentence($nbWords = 4, $variableNbWords = true);
            }
            $campeonatoData[] = [
                'id' => $id,
                'responsable_id' => $admin_id,
                'descripcion' => $nombre,
                'fecha_inicio' => date("Y-m-d H:i:s"),
                'fecha_fin' => NULL,                
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
            ];
            $campeonatosIds[] = $id;
        }
        $table = $this->table('campeonatos');
        $table->truncate();
        $table->insert($campeonatoData)->save();
    }
}

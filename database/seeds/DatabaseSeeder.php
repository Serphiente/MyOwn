<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ContactCompanySeed::class);
        $this->call(ContactSeed::class);
        $this->call(ManufacturadorSeed::class);
        $this->call(TipoproductoSeed::class);
        $this->call(PresentacionproductoSeed::class);
        $this->call(PrincipioactivoSeed::class);
        $this->call(ProductoSeed::class);
        $this->call(ListaexternaSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(UserActionSeed::class);
        $this->call(ProductoSeedPivot::class);

    }
}

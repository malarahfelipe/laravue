<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $citiesInRS = [[
        "code" => "3850",
        "name" => "Aceguá"
      ], [
        "code" => "3851",
        "name" => "Água Santa"
      ], [
        "code" => "3852",
        "name" => "Agudo"
      ], [
        "code" => "3853",
        "name" => "Ajuricaba"
      ], [
        "code" => "3854",
        "name" => "Alecrim"
      ], [
        "code" => "3855",
        "name" => "Alegrete"
      ], [
        "code" => "3856",
        "name" => "Alegria"
      ], [
        "code" => "3857",
        "name" => "Almirante Tamandaré do Sul"
      ], [
        "code" => "3858",
        "name" => "Alpestre"
      ], [
        "code" => "3859",
        "name" => "Alto Alegre"
      ], [
        "code" => "3860",
        "name" => "Alto Feliz"
      ], [
        "code" => "3861",
        "name" => "Alvorada"
      ], [
        "code" => "3862",
        "name" => "Amaral Ferrador"
      ], [
        "code" => "3863",
        "name" => "Ametista do Sul"
      ], [
        "code" => "3864",
        "name" => "André da Rocha"
      ], [
        "code" => "3865",
        "name" => "Anta Gorda"
      ], [
        "code" => "3866",
        "name" => "Antônio Prado"
      ], [
        "code" => "3867",
        "name" => "Arambaré"
      ], [
        "code" => "3868",
        "name" => "Araricá"
      ], [
        "code" => "3869",
        "name" => "Aratiba"
      ], [
        "code" => "3870",
        "name" => "Arroio do Meio"
      ], [
        "code" => "3871",
        "name" => "Arroio do Padre"
      ], [
        "code" => "3872",
        "name" => "Arroio do Sal"
      ], [
        "code" => "3873",
        "name" => "Arroio do Tigre"
      ], [
        "code" => "3874",
        "name" => "Arroio dos Ratos"
      ], [
        "code" => "3875",
        "name" => "Arroio Grande"
      ], [
        "code" => "3876",
        "name" => "Arvorezinha"
      ], [
        "code" => "3877",
        "name" => "Augusto Pestana"
      ], [
        "code" => "3878",
        "name" => "Áurea"
      ], [
        "code" => "3879",
        "name" => "Bagé"
      ], [
        "code" => "3880",
        "name" => "Balneário Pinhal"
      ], [
        "code" => "3881",
        "name" => "Barão"
      ], [
        "code" => "3882",
        "name" => "Barão de Cotegipe"
      ], [
        "code" => "3883",
        "name" => "Barão do Triunfo"
      ], [
        "code" => "3884",
        "name" => "Barra do Guarita"
      ], [
        "code" => "3885",
        "name" => "Barra do Quaraí"
      ], [
        "code" => "3886",
        "name" => "Barra do Ribeiro"
      ], [
        "code" => "3887",
        "name" => "Barra do Rio Azul"
      ], [
        "code" => "3888",
        "name" => "Barra Funda"
      ], [
        "code" => "3889",
        "name" => "Barracão"
      ], [
        "code" => "3890",
        "name" => "Barros Cassal"
      ], [
        "code" => "3891",
        "name" => "Benjamin Constant do Sul"
      ], [
        "code" => "3892",
        "name" => "Bento Gonçalves"
      ], [
        "code" => "3893",
        "name" => "Boa Vista das Missões"
      ], [
        "code" => "3894",
        "name" => "Boa Vista do Buricá"
      ], [
        "code" => "3895",
        "name" => "Boa Vista do Cadeado"
      ], [
        "code" => "3896",
        "name" => "Boa Vista do Incra"
      ], [
        "code" => "3897",
        "name" => "Boa Vista do Sul"
      ], [
        "code" => "3898",
        "name" => "Bom Jesus"
      ], [
        "code" => "3899",
        "name" => "Bom Princípio"
      ], [
        "code" => "3900",
        "name" => "Bom Progresso"
      ], [
        "code" => "3901",
        "name" => "Bom Retiro do Sul"
      ], [
        "code" => "3902",
        "name" => "Boqueirão do Leão"
      ], [
        "code" => "3903",
        "name" => "Bossoroca"
      ], [
        "code" => "3904",
        "name" => "Bozano"
      ], [
        "code" => "3905",
        "name" => "Braga"
      ], [
        "code" => "3906",
        "name" => "Brochier"
      ], [
        "code" => "3907",
        "name" => "Butiá"
      ], [
        "code" => "3908",
        "name" => "Caçapava do Sul"
      ], [
        "code" => "3909",
        "name" => "Cacequi"
      ], [
        "code" => "3910",
        "name" => "Cachoeira do Sul"
      ], [
        "code" => "3911",
        "name" => "Cachoeirinha"
      ], [
        "code" => "3912",
        "name" => "Cacique Doble"
      ], [
        "code" => "3913",
        "name" => "Caibaté"
      ], [
        "code" => "3914",
        "name" => "Caiçara"
      ], [
        "code" => "3915",
        "name" => "Camaquã"
      ], [
        "code" => "3916",
        "name" => "Camargo"
      ], [
        "code" => "3917",
        "name" => "Cambará do Sul"
      ], [
        "code" => "3918",
        "name" => "Campestre da Serra"
      ], [
        "code" => "3919",
        "name" => "Campina das Missões"
      ], [
        "code" => "3920",
        "name" => "Campinas do Sul"
      ], [
        "code" => "3921",
        "name" => "Campo Bom"
      ], [
        "code" => "3922",
        "name" => "Campo Novo"
      ], [
        "code" => "3923",
        "name" => "Campos Borges"
      ], [
        "code" => "3924",
        "name" => "Candelária"
      ], [
        "code" => "3925",
        "name" => "Cândcodeo Godói"
      ], [
        "code" => "3926",
        "name" => "Candiota"
      ], [
        "code" => "3927",
        "name" => "Canela"
      ], [
        "code" => "3928",
        "name" => "Canguçu"
      ], [
        "code" => "3929",
        "name" => "Canoas"
      ], [
        "code" => "3930",
        "name" => "Canudos do Vale"
      ], [
        "code" => "3931",
        "name" => "Capão Bonito do Sul"
      ], [
        "code" => "3932",
        "name" => "Capão da Canoa"
      ], [
        "code" => "3933",
        "name" => "Capão do Cipó"
      ], [
        "code" => "3934",
        "name" => "Capão do Leão"
      ], [
        "code" => "3935",
        "name" => "Capela de Santana"
      ], [
        "code" => "3936",
        "name" => "Capitão"
      ], [
        "code" => "3937",
        "name" => "Capivari do Sul"
      ], [
        "code" => "3938",
        "name" => "Caraá"
      ], [
        "code" => "3939",
        "name" => "Carazinho"
      ], [
        "code" => "3940",
        "name" => "Carlos Barbosa"
      ], [
        "code" => "3941",
        "name" => "Carlos Gomes"
      ], [
        "code" => "3942",
        "name" => "Casca"
      ], [
        "code" => "3943",
        "name" => "Caseiros"
      ], [
        "code" => "3944",
        "name" => "Catuípe"
      ], [
        "code" => "3945",
        "name" => "Caxias do Sul"
      ], [
        "code" => "3946",
        "name" => "Centenário"
      ], [
        "code" => "3947",
        "name" => "Cerrito"
      ], [
        "code" => "3948",
        "name" => "Cerro Branco"
      ], [
        "code" => "3949",
        "name" => "Cerro Grande"
      ], [
        "code" => "3950",
        "name" => "Cerro Grande do Sul"
      ], [
        "code" => "3951",
        "name" => "Cerro Largo"
      ], [
        "code" => "3952",
        "name" => "Chapada"
      ], [
        "code" => "3953",
        "name" => "Charqueadas"
      ], [
        "code" => "3954",
        "name" => "Charrua"
      ], [
        "code" => "3955",
        "name" => "Chiapeta"
      ], [
        "code" => "3956",
        "name" => "Chuí"
      ], [
        "code" => "3957",
        "name" => "Chuvisca"
      ], [
        "code" => "3958",
        "name" => "Ccodereira"
      ], [
        "code" => "3959",
        "name" => "Ciríaco"
      ], [
        "code" => "3960",
        "name" => "Colinas"
      ], [
        "code" => "3961",
        "name" => "Colorado"
      ], [
        "code" => "3962",
        "name" => "Condor"
      ], [
        "code" => "3963",
        "name" => "Constantina"
      ], [
        "code" => "3964",
        "name" => "Coqueiro Baixo"
      ], [
        "code" => "3965",
        "name" => "Coqueiros do Sul"
      ], [
        "code" => "3966",
        "name" => "Coronel Barros"
      ], [
        "code" => "3967",
        "name" => "Coronel Bicaco"
      ], [
        "code" => "3968",
        "name" => "Coronel Pilar"
      ], [
        "code" => "3969",
        "name" => "Cotiporã"
      ], [
        "code" => "3970",
        "name" => "Coxilha"
      ], [
        "code" => "3971",
        "name" => "Crissiumal"
      ], [
        "code" => "3972",
        "name" => "Cristal"
      ], [
        "code" => "3973",
        "name" => "Cristal do Sul"
      ], [
        "code" => "3974",
        "name" => "Cruz Alta"
      ], [
        "code" => "3975",
        "name" => "Cruzaltense"
      ], [
        "code" => "3976",
        "name" => "Cruzeiro do Sul"
      ], [
        "code" => "3977",
        "name" => "Davcode Canabarro"
      ], [
        "code" => "3978",
        "name" => "Derrubadas"
      ], [
        "code" => "3979",
        "name" => "Dezesseis de Novembro"
      ], [
        "code" => "3980",
        "name" => "Dilermando de Aguiar"
      ], [
        "code" => "3981",
        "name" => "Dois Irmãos"
      ], [
        "code" => "3982",
        "name" => "Dois Irmãos das Missões"
      ], [
        "code" => "3983",
        "name" => "Dois Lajeados"
      ], [
        "code" => "3984",
        "name" => "Dom Feliciano"
      ], [
        "code" => "3985",
        "name" => "Dom Pedrito"
      ], [
        "code" => "3986",
        "name" => "Dom Pedro de Alcântara"
      ], [
        "code" => "3987",
        "name" => "Dona Francisca"
      ], [
        "code" => "3988",
        "name" => "Doutor Maurício Cardoso"
      ], [
        "code" => "3989",
        "name" => "Doutor Ricardo"
      ], [
        "code" => "3990",
        "name" => "Eldorado do Sul"
      ], [
        "code" => "3991",
        "name" => "Encantado"
      ], [
        "code" => "3992",
        "name" => "Encruzilhada do Sul"
      ], [
        "code" => "3993",
        "name" => "Engenho Velho"
      ], [
        "code" => "3994",
        "name" => "Entre Rios do Sul"
      ], [
        "code" => "3995",
        "name" => "Entre-Ijuís"
      ], [
        "code" => "3996",
        "name" => "Erebango"
      ], [
        "code" => "3997",
        "name" => "Erechim"
      ], [
        "code" => "3998",
        "name" => "Ernestina"
      ], [
        "code" => "3999",
        "name" => "Erval Grande"
      ], [
        "code" => "4000",
        "name" => "Erval Seco"
      ], [
        "code" => "4001",
        "name" => "Esmeralda"
      ], [
        "code" => "4002",
        "name" => "Esperança do Sul"
      ], [
        "code" => "4003",
        "name" => "Espumoso"
      ], [
        "code" => "4004",
        "name" => "Estação"
      ], [
        "code" => "4005",
        "name" => "Estância Velha"
      ], [
        "code" => "4006",
        "name" => "Esteio"
      ], [
        "code" => "4007",
        "name" => "Estrela"
      ], [
        "code" => "4008",
        "name" => "Estrela Velha"
      ], [
        "code" => "4009",
        "name" => "Eugênio de Castro"
      ], [
        "code" => "4010",
        "name" => "Fagundes Varela"
      ], [
        "code" => "4011",
        "name" => "Farroupilha"
      ], [
        "code" => "4012",
        "name" => "Faxinal do Soturno"
      ], [
        "code" => "4013",
        "name" => "Faxinalzinho"
      ], [
        "code" => "4014",
        "name" => "Fazenda Vilanova"
      ], [
        "code" => "4015",
        "name" => "Feliz"
      ], [
        "code" => "4016",
        "name" => "Flores da Cunha"
      ], [
        "code" => "4017",
        "name" => "Floriano Peixoto"
      ], [
        "code" => "4018",
        "name" => "Fontoura Xavier"
      ], [
        "code" => "4019",
        "name" => "Formigueiro"
      ], [
        "code" => "4020",
        "name" => "Forquetinha"
      ], [
        "code" => "4021",
        "name" => "Fortaleza dos Valos"
      ], [
        "code" => "4022",
        "name" => "Frederico Westphalen"
      ], [
        "code" => "4023",
        "name" => "Garibaldi"
      ], [
        "code" => "4024",
        "name" => "Garruchos"
      ], [
        "code" => "4025",
        "name" => "Gaurama"
      ], [
        "code" => "4026",
        "name" => "General Câmara"
      ], [
        "code" => "4027",
        "name" => "Gentil"
      ], [
        "code" => "4028",
        "name" => "Getúlio Vargas"
      ], [
        "code" => "4029",
        "name" => "Giruá"
      ], [
        "code" => "4030",
        "name" => "Glorinha"
      ], [
        "code" => "4031",
        "name" => "Gramado"
      ], [
        "code" => "4032",
        "name" => "Gramado dos Loureiros"
      ], [
        "code" => "4033",
        "name" => "Gramado Xavier"
      ], [
        "code" => "4034",
        "name" => "Gravataí"
      ], [
        "code" => "4035",
        "name" => "Guabiju"
      ], [
        "code" => "4036",
        "name" => "Guaíba"
      ], [
        "code" => "4037",
        "name" => "Guaporé"
      ], [
        "code" => "4038",
        "name" => "Guarani das Missões"
      ], [
        "code" => "4039",
        "name" => "Harmonia"
      ], [
        "code" => "4040",
        "name" => "Herval"
      ], [
        "code" => "4041",
        "name" => "Herveiras"
      ], [
        "code" => "4042",
        "name" => "Horizontina"
      ], [
        "code" => "4043",
        "name" => "Hulha Negra"
      ], [
        "code" => "4044",
        "name" => "Humaitá"
      ], [
        "code" => "4045",
        "name" => "Ibarama"
      ], [
        "code" => "4046",
        "name" => "Ibiaçá"
      ], [
        "code" => "4047",
        "name" => "Ibiraiaras"
      ], [
        "code" => "4048",
        "name" => "Ibirapuitã"
      ], [
        "code" => "4049",
        "name" => "Ibirubá"
      ], [
        "code" => "4050",
        "name" => "Igrejinha"
      ], [
        "code" => "4051",
        "name" => "Ijuí"
      ], [
        "code" => "4052",
        "name" => "Ilópolis"
      ], [
        "code" => "4053",
        "name" => "Imbé"
      ], [
        "code" => "4054",
        "name" => "Imigrante"
      ], [
        "code" => "4055",
        "name" => "Independência"
      ], [
        "code" => "4056",
        "name" => "Inhacorá"
      ], [
        "code" => "4057",
        "name" => "Ipê"
      ], [
        "code" => "4058",
        "name" => "Ipiranga do Sul"
      ], [
        "code" => "4059",
        "name" => "Iraí"
      ], [
        "code" => "4060",
        "name" => "Itaara"
      ], [
        "code" => "4061",
        "name" => "Itacurubi"
      ], [
        "code" => "4062",
        "name" => "Itapuca"
      ], [
        "code" => "4063",
        "name" => "Itaqui"
      ], [
        "code" => "4064",
        "name" => "Itati"
      ], [
        "code" => "4065",
        "name" => "Itatiba do Sul"
      ], [
        "code" => "4066",
        "name" => "Ivorá"
      ], [
        "code" => "4067",
        "name" => "Ivoti"
      ], [
        "code" => "4068",
        "name" => "Jaboticaba"
      ], [
        "code" => "4069",
        "name" => "Jacuizinho"
      ], [
        "code" => "4070",
        "name" => "Jacutinga"
      ], [
        "code" => "4071",
        "name" => "Jaguarão"
      ], [
        "code" => "4072",
        "name" => "Jaguari"
      ], [
        "code" => "4073",
        "name" => "Jaquirana"
      ], [
        "code" => "4074",
        "name" => "Jari"
      ], [
        "code" => "4075",
        "name" => "Jóia"
      ], [
        "code" => "4076",
        "name" => "Júlio de Castilhos"
      ], [
        "code" => "4077",
        "name" => "Lagoa Bonita do Sul"
      ], [
        "code" => "4078",
        "name" => "Lagoa dos Três Cantos"
      ], [
        "code" => "4079",
        "name" => "Lagoa Vermelha"
      ], [
        "code" => "4080",
        "name" => "Lagoão"
      ], [
        "code" => "4081",
        "name" => "Lajeado"
      ], [
        "code" => "4082",
        "name" => "Lajeado do Bugre"
      ], [
        "code" => "4083",
        "name" => "Lavras do Sul"
      ], [
        "code" => "4084",
        "name" => "Liberato Salzano"
      ], [
        "code" => "4085",
        "name" => "Lindolfo Collor"
      ], [
        "code" => "4086",
        "name" => "Linha Nova"
      ], [
        "code" => "4087",
        "name" => "Maçambara"
      ], [
        "code" => "4088",
        "name" => "Machadinho"
      ], [
        "code" => "4089",
        "name" => "Mampituba"
      ], [
        "code" => "4090",
        "name" => "Manoel Viana"
      ], [
        "code" => "4091",
        "name" => "Maquiné"
      ], [
        "code" => "4092",
        "name" => "Maratá"
      ], [
        "code" => "4093",
        "name" => "Marau"
      ], [
        "code" => "4094",
        "name" => "Marcelino Ramos"
      ], [
        "code" => "4095",
        "name" => "Mariana Pimentel"
      ], [
        "code" => "4096",
        "name" => "Mariano Moro"
      ], [
        "code" => "4097",
        "name" => "Marques de Souza"
      ], [
        "code" => "4098",
        "name" => "Mata"
      ], [
        "code" => "4099",
        "name" => "Mato Castelhano"
      ], [
        "code" => "4100",
        "name" => "Mato Leitão"
      ], [
        "code" => "4101",
        "name" => "Mato Queimado"
      ], [
        "code" => "4102",
        "name" => "Maximiliano de Almecodea"
      ], [
        "code" => "4103",
        "name" => "Minas do Leão"
      ], [
        "code" => "4104",
        "name" => "Miraguaí"
      ], [
        "code" => "4105",
        "name" => "Montauri"
      ], [
        "code" => "4106",
        "name" => "Monte Alegre dos Campos"
      ], [
        "code" => "4107",
        "name" => "Monte Belo do Sul"
      ], [
        "code" => "4108",
        "name" => "Montenegro"
      ], [
        "code" => "4109",
        "name" => "Mormaço"
      ], [
        "code" => "4110",
        "name" => "Morrinhos do Sul"
      ], [
        "code" => "4111",
        "name" => "Morro Redondo"
      ], [
        "code" => "4112",
        "name" => "Morro Reuter"
      ], [
        "code" => "4113",
        "name" => "Mostardas"
      ], [
        "code" => "4114",
        "name" => "Muçum"
      ], [
        "code" => "4115",
        "name" => "Muitos Capões"
      ], [
        "code" => "4116",
        "name" => "Muliterno"
      ], [
        "code" => "4117",
        "name" => "Não-Me-Toque"
      ], [
        "code" => "4118",
        "name" => "Nicolau Vergueiro"
      ], [
        "code" => "4119",
        "name" => "Nonoai"
      ], [
        "code" => "4120",
        "name" => "Nova Alvorada"
      ], [
        "code" => "4121",
        "name" => "Nova Araçá"
      ], [
        "code" => "4122",
        "name" => "Nova Bassano"
      ], [
        "code" => "4123",
        "name" => "Nova Boa Vista"
      ], [
        "code" => "4124",
        "name" => "Nova Bréscia"
      ], [
        "code" => "4125",
        "name" => "Nova Candelária"
      ], [
        "code" => "4126",
        "name" => "Nova Esperança do Sul"
      ], [
        "code" => "4127",
        "name" => "Nova Hartz"
      ], [
        "code" => "4128",
        "name" => "Nova Pádua"
      ], [
        "code" => "4129",
        "name" => "Nova Palma"
      ], [
        "code" => "4130",
        "name" => "Nova Petrópolis"
      ], [
        "code" => "4131",
        "name" => "Nova Prata"
      ], [
        "code" => "4132",
        "name" => "Nova Ramada"
      ], [
        "code" => "4133",
        "name" => "Nova Roma do Sul"
      ], [
        "code" => "4134",
        "name" => "Nova Santa Rita"
      ], [
        "code" => "4135",
        "name" => "Novo Barreiro"
      ], [
        "code" => "4136",
        "name" => "Novo Cabrais"
      ], [
        "code" => "4137",
        "name" => "Novo Hamburgo"
      ], [
        "code" => "4138",
        "name" => "Novo Machado"
      ], [
        "code" => "4139",
        "name" => "Novo Tiradentes"
      ], [
        "code" => "4140",
        "name" => "Novo Xingu"
      ], [
        "code" => "4141",
        "name" => "Osório"
      ], [
        "code" => "4142",
        "name" => "Paim Filho"
      ], [
        "code" => "4143",
        "name" => "Palmares do Sul"
      ], [
        "code" => "4144",
        "name" => "Palmeira das Missões"
      ], [
        "code" => "4145",
        "name" => "Palmitinho"
      ], [
        "code" => "4146",
        "name" => "Panambi"
      ], [
        "code" => "4147",
        "name" => "Pantano Grande"
      ], [
        "code" => "4148",
        "name" => "Paraí"
      ], [
        "code" => "4149",
        "name" => "Paraíso do Sul"
      ], [
        "code" => "4150",
        "name" => "Pareci Novo"
      ], [
        "code" => "4151",
        "name" => "Parobé"
      ], [
        "code" => "4152",
        "name" => "Passa Sete"
      ], [
        "code" => "4153",
        "name" => "Passo do Sobrado"
      ], [
        "code" => "4154",
        "name" => "Passo Fundo"
      ], [
        "code" => "4155",
        "name" => "Paulo Bento"
      ], [
        "code" => "4156",
        "name" => "Paverama"
      ], [
        "code" => "4157",
        "name" => "Pedras Altas"
      ], [
        "code" => "4158",
        "name" => "Pedro Osório"
      ], [
        "code" => "4159",
        "name" => "Pejuçara"
      ], [
        "code" => "4160",
        "name" => "Pelotas"
      ], [
        "code" => "4161",
        "name" => "Picada Café"
      ], [
        "code" => "4162",
        "name" => "Pinhal"
      ], [
        "code" => "4163",
        "name" => "Pinhal da Serra"
      ], [
        "code" => "4164",
        "name" => "Pinhal Grande"
      ], [
        "code" => "4165",
        "name" => "Pinheirinho do Vale"
      ], [
        "code" => "4166",
        "name" => "Pinheiro Machado"
      ], [
        "code" => "4167",
        "name" => "Pirapó"
      ], [
        "code" => "4168",
        "name" => "Piratini"
      ], [
        "code" => "4169",
        "name" => "Planalto"
      ], [
        "code" => "4170",
        "name" => "Poço das Antas"
      ], [
        "code" => "4171",
        "name" => "Pontão"
      ], [
        "code" => "4172",
        "name" => "Ponte Preta"
      ], [
        "code" => "4173",
        "name" => "Portão"
      ], [
        "code" => "4174",
        "name" => "Porto Alegre"
      ], [
        "code" => "4175",
        "name" => "Porto Lucena"
      ], [
        "code" => "4176",
        "name" => "Porto Mauá"
      ], [
        "code" => "4177",
        "name" => "Porto Vera Cruz"
      ], [
        "code" => "4178",
        "name" => "Porto Xavier"
      ], [
        "code" => "4179",
        "name" => "Pouso Novo"
      ], [
        "code" => "4180",
        "name" => "Prescodeente Lucena"
      ], [
        "code" => "4181",
        "name" => "Progresso"
      ], [
        "code" => "4182",
        "name" => "Protásio Alves"
      ], [
        "code" => "4183",
        "name" => "Putinga"
      ], [
        "code" => "4184",
        "name" => "Quaraí"
      ], [
        "code" => "4185",
        "name" => "Quatro Irmãos"
      ], [
        "code" => "4186",
        "name" => "Quevedos"
      ], [
        "code" => "4187",
        "name" => "Quinze de Novembro"
      ], [
        "code" => "4188",
        "name" => "Redentora"
      ], [
        "code" => "4189",
        "name" => "Relvado"
      ], [
        "code" => "4190",
        "name" => "Restinga Seca"
      ], [
        "code" => "4191",
        "name" => "Rio dos Índios"
      ], [
        "code" => "4192",
        "name" => "Rio Grande"
      ], [
        "code" => "4193",
        "name" => "Rio Pardo"
      ], [
        "code" => "4194",
        "name" => "Riozinho"
      ], [
        "code" => "4195",
        "name" => "Roca Sales"
      ], [
        "code" => "4196",
        "name" => "Rodeio Bonito"
      ], [
        "code" => "4197",
        "name" => "Rolador"
      ], [
        "code" => "4198",
        "name" => "Rolante"
      ], [
        "code" => "4199",
        "name" => "Ronda Alta"
      ], [
        "code" => "4200",
        "name" => "Rondinha"
      ], [
        "code" => "4201",
        "name" => "Roque Gonzales"
      ], [
        "code" => "4202",
        "name" => "Rosário do Sul"
      ], [
        "code" => "4203",
        "name" => "Sagrada Família"
      ], [
        "code" => "4204",
        "name" => "Saldanha Marinho"
      ], [
        "code" => "4205",
        "name" => "Salto do Jacuí"
      ], [
        "code" => "4206",
        "name" => "Salvador das Missões"
      ], [
        "code" => "4207",
        "name" => "Salvador do Sul"
      ], [
        "code" => "4208",
        "name" => "Sananduva"
      ], [
        "code" => "4209",
        "name" => "Santa Bárbara do Sul"
      ], [
        "code" => "4210",
        "name" => "Santa Cecília do Sul"
      ], [
        "code" => "4211",
        "name" => "Santa Clara do Sul"
      ], [
        "code" => "4212",
        "name" => "Santa Cruz do Sul"
      ], [
        "code" => "4213",
        "name" => "Santa Margarcodea do Sul"
      ], [
        "code" => "4214",
        "name" => "Santa Maria"
      ], [
        "code" => "4215",
        "name" => "Santa Maria do Herval"
      ], [
        "code" => "4216",
        "name" => "Santa Rosa"
      ], [
        "code" => "4217",
        "name" => "Santa Tereza"
      ], [
        "code" => "4218",
        "name" => "Santa Vitória do Palmar"
      ], [
        "code" => "4219",
        "name" => "Santana da Boa Vista"
      ], [
        "code" => "4220",
        "name" => "Santana do Livramento"
      ], [
        "code" => "4221",
        "name" => "Santiago"
      ], [
        "code" => "4222",
        "name" => "Santo Ângelo"
      ], [
        "code" => "4223",
        "name" => "Santo Antônio da Patrulha"
      ], [
        "code" => "4224",
        "name" => "Santo Antônio das Missões"
      ], [
        "code" => "4225",
        "name" => "Santo Antônio do Palma"
      ], [
        "code" => "4226",
        "name" => "Santo Antônio do Planalto"
      ], [
        "code" => "4227",
        "name" => "Santo Augusto"
      ], [
        "code" => "4228",
        "name" => "Santo Cristo"
      ], [
        "code" => "4229",
        "name" => "Santo Expedito do Sul"
      ], [
        "code" => "4230",
        "name" => "São Borja"
      ], [
        "code" => "4231",
        "name" => "São Domingos do Sul"
      ], [
        "code" => "4232",
        "name" => "São Francisco de Assis"
      ], [
        "code" => "4233",
        "name" => "São Francisco de Paula"
      ], [
        "code" => "4234",
        "name" => "São Gabriel"
      ], [
        "code" => "4235",
        "name" => "São Jerônimo"
      ], [
        "code" => "4236",
        "name" => "São João da Urtiga"
      ], [
        "code" => "4237",
        "name" => "São João do Polêsine"
      ], [
        "code" => "4238",
        "name" => "São Jorge"
      ], [
        "code" => "4239",
        "name" => "São José das Missões"
      ], [
        "code" => "4240",
        "name" => "São José do Herval"
      ], [
        "code" => "4241",
        "name" => "São José do Hortêncio"
      ], [
        "code" => "4242",
        "name" => "São José do Inhacorá"
      ], [
        "code" => "4243",
        "name" => "São José do Norte"
      ], [
        "code" => "4244",
        "name" => "São José do Ouro"
      ], [
        "code" => "4245",
        "name" => "São José do Sul"
      ], [
        "code" => "4246",
        "name" => "São José dos Ausentes"
      ], [
        "code" => "4247",
        "name" => "São Leopoldo"
      ], [
        "code" => "4248",
        "name" => "São Lourenço do Sul"
      ], [
        "code" => "4249",
        "name" => "São Luiz Gonzaga"
      ], [
        "code" => "4250",
        "name" => "São Marcos"
      ], [
        "code" => "4251",
        "name" => "São Martinho"
      ], [
        "code" => "4252",
        "name" => "São Martinho da Serra"
      ], [
        "code" => "4253",
        "name" => "São Miguel das Missões"
      ], [
        "code" => "4254",
        "name" => "São Nicolau"
      ], [
        "code" => "4255",
        "name" => "São Paulo das Missões"
      ], [
        "code" => "4256",
        "name" => "São Pedro da Serra"
      ], [
        "code" => "4257",
        "name" => "São Pedro das Missões"
      ], [
        "code" => "4258",
        "name" => "São Pedro do Butiá"
      ], [
        "code" => "4259",
        "name" => "São Pedro do Sul"
      ], [
        "code" => "4260",
        "name" => "São Sebastião do Caí"
      ], [
        "code" => "4261",
        "name" => "São Sepé"
      ], [
        "code" => "4262",
        "name" => "São Valentim"
      ], [
        "code" => "4263",
        "name" => "São Valentim do Sul"
      ], [
        "code" => "4264",
        "name" => "São Valério do Sul"
      ], [
        "code" => "4265",
        "name" => "São Vendelino"
      ], [
        "code" => "4266",
        "name" => "São Vicente do Sul"
      ], [
        "code" => "4267",
        "name" => "Sapiranga"
      ], [
        "code" => "4268",
        "name" => "Sapucaia do Sul"
      ], [
        "code" => "4269",
        "name" => "Sarandi"
      ], [
        "code" => "4270",
        "name" => "Seberi"
      ], [
        "code" => "4271",
        "name" => "Sede Nova"
      ], [
        "code" => "4272",
        "name" => "Segredo"
      ], [
        "code" => "4273",
        "name" => "Selbach"
      ], [
        "code" => "4274",
        "name" => "Senador Salgado Filho"
      ], [
        "code" => "4275",
        "name" => "Sentinela do Sul"
      ], [
        "code" => "4276",
        "name" => "Serafina Corrêa"
      ], [
        "code" => "4277",
        "name" => "Sério"
      ], [
        "code" => "4278",
        "name" => "Sertão"
      ], [
        "code" => "4279",
        "name" => "Sertão Santana"
      ], [
        "code" => "4280",
        "name" => "Sete de Setembro"
      ], [
        "code" => "4281",
        "name" => "Severiano de Almecodea"
      ], [
        "code" => "4282",
        "name" => "Silveira Martins"
      ], [
        "code" => "4283",
        "name" => "Sinimbu"
      ], [
        "code" => "4284",
        "name" => "Sobradinho"
      ], [
        "code" => "4285",
        "name" => "Soledade"
      ], [
        "code" => "4286",
        "name" => "Tabaí"
      ], [
        "code" => "4287",
        "name" => "Tapejara"
      ], [
        "code" => "4288",
        "name" => "Tapera"
      ], [
        "code" => "4289",
        "name" => "Tapes"
      ], [
        "code" => "4290",
        "name" => "Taquara"
      ], [
        "code" => "4291",
        "name" => "Taquari"
      ], [
        "code" => "4292",
        "name" => "Taquaruçu do Sul"
      ], [
        "code" => "4293",
        "name" => "Tavares"
      ], [
        "code" => "4294",
        "name" => "Tenente Portela"
      ], [
        "code" => "4295",
        "name" => "Terra de Areia"
      ], [
        "code" => "4296",
        "name" => "Teutônia"
      ], [
        "code" => "4297",
        "name" => "Tio Hugo"
      ], [
        "code" => "4298",
        "name" => "Tiradentes do Sul"
      ], [
        "code" => "4299",
        "name" => "Toropi"
      ], [
        "code" => "4300",
        "name" => "Torres"
      ], [
        "code" => "4301",
        "name" => "Tramandaí"
      ], [
        "code" => "4302",
        "name" => "Travesseiro"
      ], [
        "code" => "4303",
        "name" => "Três Arroios"
      ], [
        "code" => "4304",
        "name" => "Três Cachoeiras"
      ], [
        "code" => "4305",
        "name" => "Três Coroas"
      ], [
        "code" => "4306",
        "name" => "Três de Maio"
      ], [
        "code" => "4307",
        "name" => "Três Forquilhas"
      ], [
        "code" => "4308",
        "name" => "Três Palmeiras"
      ], [
        "code" => "4309",
        "name" => "Três Passos"
      ], [
        "code" => "4310",
        "name" => "Trindade do Sul"
      ], [
        "code" => "4311",
        "name" => "Triunfo"
      ], [
        "code" => "4312",
        "name" => "Tucunduva"
      ], [
        "code" => "4313",
        "name" => "Tunas"
      ], [
        "code" => "4314",
        "name" => "Tupanci do Sul"
      ], [
        "code" => "4315",
        "name" => "Tupanciretã"
      ], [
        "code" => "4316",
        "name" => "Tupandi"
      ], [
        "code" => "4317",
        "name" => "Tuparendi"
      ], [
        "code" => "4318",
        "name" => "Turuçu"
      ], [
        "code" => "4319",
        "name" => "Ubiretama"
      ], [
        "code" => "4320",
        "name" => "União da Serra"
      ], [
        "code" => "4321",
        "name" => "Unistalda"
      ], [
        "code" => "4322",
        "name" => "Uruguaiana"
      ], [
        "code" => "4323",
        "name" => "Vacaria"
      ], [
        "code" => "4324",
        "name" => "Vale do Sol"
      ], [
        "code" => "4325",
        "name" => "Vale Real"
      ], [
        "code" => "4326",
        "name" => "Vale Verde"
      ], [
        "code" => "4327",
        "name" => "Vanini"
      ], [
        "code" => "4328",
        "name" => "Venâncio Aires"
      ], [
        "code" => "4329",
        "name" => "Vera Cruz"
      ], [
        "code" => "4330",
        "name" => "Veranópolis"
      ], [
        "code" => "4331",
        "name" => "Vespasiano Correa"
      ], [
        "code" => "4332",
        "name" => "Viadutos"
      ], [
        "code" => "4333",
        "name" => "Viamão"
      ], [
        "code" => "4334",
        "name" => "Vicente Dutra"
      ], [
        "code" => "4335",
        "name" => "Victor Graeff"
      ], [
        "code" => "4336",
        "name" => "Vila Flores"
      ], [
        "code" => "4337",
        "name" => "Vila Lângaro"
      ], [
        "code" => "4338",
        "name" => "Vila Maria"
      ], [
        "code" => "4339",
        "name" => "Vila Nova do Sul"
      ], [
        "code" => "4340",
        "name" => "Vista Alegre"
      ], [
        "code" => "4341",
        "name" => "Vista Alegre do Prata"
      ], [
        "code" => "4342",
        "name" => "Vista Gaúcha"
      ], [
        "code" => "4343",
        "name" => "Vitória das Missões"
      ], [
        "code" => "4344",
        "name" => "Westfália"
      ], [
        "code" => "4345",
        "name" => "Xangri-lá"
      ]];
      foreach($citiesInRS as $city) {
        DB::table('cities')->insert($city);
      }
    }
}

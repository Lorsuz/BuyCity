class cidades {
	nome;
	preco_cidade;
	hipoteca;
	preco_casa;
	preco_hotel;
	nivel;
	aluguel0;
	aluguel1;
	aluguel2;
	aluguel3;
	dono;

	constructor ( no, pd, hi, pc, ph, al0, al1, al2, al3 ) {
		this.dono = "Banco";
		this.nome = no;
		this.preco_cidade = pd;
		this.hipoteca = hi;
		this.preco_casa = pc;
		this.preco_hotel = ph;
		this.nivel = 0;
		this.aluguel0 = al0;
		this.aluguel1 = al1;
		this.aluguel2 = al2;
		this.aluguel3 = al3;
	}

	getNome () {
		return this.nome;
	} getPreco_cidade () {
		return this.preco_cidade;
	} getHipoteca () {
		return this.hipoteca;
	} getPreco_casa () {
		return this.preco_casa;
	} getPreco_hotel () {
		return this.preco_hotel;
	} getNivel () {
		return this.nivel;
	} getAluguel0 () {
		return this.aluguel0;
	} getAluguel1 () {
		return this.aluguel1;
	} getAluguel2 () {
		return this.aluguel2;
	} getAluguel3 () {
		return this.aluguel3;
	} getDono () {
		return this.dono;
	}

	setNome ( nome ) {
		this.nome = nome;
	} setPreco_cidade ( preco_cidade ) {
		this.preco_cidade = preco_cidade;
	} setHipoteca ( hipoteca ) {
		this.hipoteca = hipoteca;
	} setPreco_casa ( preco_casa ) {
		this.preco_casa = preco_casa;
	} setPreco_hotel ( preco_hotel ) {
		this.preco_hotel = preco_hotel;
	} setNivel ( nivel ) {
		this.nivel = nivel;
	} setAluguel0 ( aluguel0 ) {
		this.aluguel0 = aluguel0;
	} setAluguel1 ( aluguel1 ) {
		this.aluguel1 = aluguel1;
	} setAluguel2 ( aluguel2 ) {
		this.aluguel2 = aluguel2;
	} setAluguel3 ( aluguel3 ) {
		this.aluguel3 = aluguel3;
	} setDono ( dono ) {
		this.dono = dono;
	}


	status () {
		console.log( "Cidade: " + this.getNome() );
		console.log( "Dono: " + this.getDono() );
		if ( this.getDono() === "Banco" ) {
			console.log( " - Preço: " + this.getPreco_cidade() );
		}
		console.log( "Aluguel 0: " + this.getAluguel0() );
		console.log( "Aluguel 1: " + this.getAluguel1() );
		console.log( "Aluguel 2: " + this.getAluguel2() );
		console.log( "Aluguel 3: " + this.getAluguel3() );
		console.log( "Casa: " + this.getPreco_casa() );
		console.log( "Hotel: " + this.getPreco_hotel() );
		console.log( "Hipoteca: " + this.getHipoteca() );
		console.log( "------------------------" );
	}


}
nome;
preco_cidade;
hipoteca;
preco_casa;
preco_hotel;
nivel;
aluguel0;
aluguel1;
aluguel2;
aluguel3;
dono;

let c0 = new cidades( "LISBOA", 100, 80, 30, 60, 30, 60, 60, 30, 60 );
let c1 = new cidades( "PEQUIN", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c2 = new cidades( "VIENA", 50, 80, 30, 60, 30, 60, 60, 30, 60 );
let c3 = new cidades( "WASHINGTON", 60, 80, 30, 60, 30, 60, 60, 30, 60 );
let c4 = new cidades( "VARSOVIA", 35, 80, 30, 60, 30, 60, 60, 30, 60 );
let c5 = new cidades( "BERLIM", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c6 = new cidades( "NOVA DELHI", 65, 80, 30, 60, 30, 60, 60, 30, 60 );
let c7 = new cidades( "PARIZ", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c8 = new cidades( "MOSCOU", 200, 80, 30, 60, 30, 60, 60, 30, 60 );
let c9 = new cidades( "ROMA", 100, 80, 30, 60, 30, 60, 60, 30, 60 );
let c10 = new cidades( "MADRI", 30, 80, 30, 60, 30, 60, 60, 30, 60 );
let c11 = new cidades( "CARACAS", 90, 80, 30, 60, 30, 60, 60, 30, 60 );
let c12 = new cidades( "HANOI", 40, 80, 30, 60, 30, 60, 60, 30, 60 );
let c13 = new cidades( "HAVANA", 150, 80, 30, 60, 30, 60, 60, 30, 60 );
let c14 = new cidades( "BUENOS ARIES", 40, 80, 30, 60, 30, 60, 60, 30, 60 );
let c15 = new cidades( "ATENAS", 200, 80, 30, 60, 30, 60, 60, 30, 60 );
let c16 = new cidades( "AMISTERDAN", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c17 = new cidades( "ESTOCOLMO", 120, 80, 30, 60, 30, 60, 60, 30, 60 );
let c18 = new cidades( "LONDRES", 70, 80, 30, 60, 30, 60, 60, 30, 60 );
let c19 = new cidades( "KUALA LUNPUR", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c20 = new cidades( "OSLO", 65, 80, 30, 60, 30, 60, 60, 30, 60 );
let c21 = new cidades( "BRASILIA", 150, 80, 30, 60, 30, 60, 60, 30, 60 );
let c22 = new cidades( "TRIPOLI", 50, 80, 30, 60, 30, 60, 60, 30, 60 );
let c23 = new cidades( "BANGOG", 70, 80, 30, 60, 30, 60, 60, 30, 60 );
let c24 = new cidades( "DUBLIN", 80, 80, 30, 60, 30, 60, 60, 30, 60 );
let c25 = new cidades( "SANTIAGO", 65, 80, 30, 60, 30, 60, 60, 30, 60 );
let c26 = new cidades( "CAIRO", 120, 80, 30, 60, 30, 60, 60, 30, 60 );
let c27 = new cidades( "OTTAWA", 200, 80, 30, 60, 30, 60, 60, 30, 60 );
let c28 = new cidades( "TOQUIO", 200, 80, 30, 60, 30, 60, 60, 30, 60 );
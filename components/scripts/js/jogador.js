class jogadores{

    nome
    cor
    dinheiro
    pib
    totalHipoteca
    cidades
    posiçao

    constructor(no,co){
        this.setNome(null)
        this.nome=no
        this.cor=co
        this.setDinheiro(805) 
        this.setTotalHipoteca(0)
        this.setPosicao(0)
        this.setCidades(0)
    }

    transacao(ci){
        
        this.cidade=ci
        if (this.cidade.getDono()=="Banco") {
            console.log("o dono é o Banco! Vai comprar?")
        }else{
            let dono=this.cidade.getDono()
            console.log(this.getNome()+" caiu na cidade "+this.cidade.getNome()+" de "+dono.getNome()+";     Aluguel = "+this.cidade.getPreco_cidade()+" reais;")
            this.setDinheiro(this.getDinheiro()-this.cidade.getPreco_cidade())
            
            dono.setDinheiro(dono.getDinheiro()+this.cidade.getPreco_cidade())
        }
    }
    comprou(ci){
        this.cidade=ci
        if (this.cidade.getDono()==this.getNome()) {
            console.log( "vc é o dono")
        } else {
        this.setDinheiro(this.getDinheiro()-this.cidade.getPreco_cidade())
        this.cidade.setDono(this.getNome())
        this.setCidades(this.getCidades()+1)
        }
        


    }
    detalhar(){
        console.log( "--"+this.getCor()+"--")
        console.log( "Jogador: "+this.getNome())
        console.log( "Money: "+this.getDinheiro())
        console.log( "Hipoteca: "+this.getTotalHipoteca())
        console.log( "Propriedades: "+this.getCidades())
        console.log( "PIB: "+this.getPib())
        console.log( "------------------------")
    }
    hipotecar(){
        
    }

    getNome(){
        return this.nome}

    getCor(){
        return this.cor}

    getDinheiro(){
        return this.dinheiro}

    getPib(){
        return this.pib}

    getTotalHipoteca(){
        return this.totalHipoteca}

    getCidades(){
        return this.cidades}
        
    getPosicao(){
        return this.Posicao}


    setNome(nome){
        this.nome = nome
        return this}

    setCor(cor){
        this.cor = cor
        return this}

    setDinheiro(dinheiro){
        this.dinheiro = dinheiro
        this.setPib()
        return this}

    setPib(){
        this.pib = this.getTotalHipoteca() + this.getDinheiro()
        return this}

    setTotalHipoteca(totalHipoteca){
        this.totalHipoteca = totalHipoteca
        this.setPib()
        return this}

    setCidades(cidades){
        this.cidades = cidades
        return this}
        setPosicao(posicao){
        this.posicao = posicao
        return this}
}
let vm = new jogadores("Alefe","vermelho")
let vr = new jogadores("Ariel","verde")
let az = new jogadores("Adriel","azul")
let am = new jogadores("Evertow","amarelo")
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CONTRATO DE LOCAÇÃO DE AUTOMÓVEL DE PRAZO DETERMINADO</title>
 
        <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
        <link rel="stylesheet" href="{{ URL::asset('css/texto.css'); }}">
    </head>
    <body>
      <style type="text/css">
          .texto{
            text-align:justify;
            font-family: arial, helvetica, sans-serif;
          }


      </style>   
 
       @if(session('mensagem'))
                  <div class="alert alert-success">
                      <p>{{session('mensagem')}}</p>
                  </div>
              @endif

  
            @foreach($contrato as $contrat)
                <p class="texto" style="text-align:justify;">
               
                    <img src="{{ URL::asset('images/logo_contrato.png'); }}"><br>
                    <p class="texto" style="text-align:justify;">
                             <h3><b><p class="texto" style="text-align:justify;">CONTRATO DE LOCAÇÃO DE AUTOMÓVEL DE PRAZO DETERMINADO</b></h3> 
                    <p class="texto" style="text-align:justify;">
                    IDENTIFICAÇÃO DAS PARTES CONTRATANTES:
                    CONTRATANTE CEDENTE: ATRAESC- ASSOCIAÇÃO DE TRÂNSITO DO ESTADO
                    DE SANTA CATARINA, pessoa jurídica sem fins lucrativos, inscrita no CNPJ:
                    19.026.372/0001-15, com sede na Rua Itaipú, n° 140, Itacorubi, Florianópolis/SC neste
                    ato representado por sua Presidente YOMARA JULITA RIBEIRO, brasileira,  empresária,
                    inscrita no RG sob o nº 2975428 SSP/SC, e CPF nº 007.989.699-54;
                    CONTRATANTE CESSIONÁRIA:{{$contrat->razao_social}}, pessoa jurídica de direito privado,
                    devidamente  inscrita no CNPJ sob nº{{$contrat->cnpj}}, com endereço na {{$contrat->rua}},
                    {{$contrat->bairro}}, {{$contrat->cidade}}, {{$contrat->estado}}, neste ato representada por: {{$contrat->solicitante}} <br><br> 

                    As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de
                    Cessão de Direito para uso de Automóvel de Prazo Determinado, que se regerá pelas
                    cláusulas seguintes e pelas condições descritas no presente.<br><br>

                    <h3><b><p class="texto" style="text-align:justify;">DO OBJETO DO CONTRATO</b></h3>
                     <p class="texto" style="text-align:justify;">
                    <b>Cláusula 1ª.</b> O presente contrato tem como OBJETO a cessão de uso do automóvel
                    marca {{$contrat->marca}}, modelo {{$contrat->modelo}}, ano {{$contrat->ano}}, cor {{$contrat->cor}}, placa {{$contrat->placa}}  veiculo adaptado
                    para atender portadores de deficiências especiais, de propriedade da CESSIONÁRIA.

                    Parágrafo Único: será entregue juntamente com o veículo, os comandos de adaptação
                    (pomo eletrônico, carregador, pomo manual, dois pedais de extensão, um pedal de
                    comando duplo e parafusos), além dos documentos do veículo, manual de instruções,
                    cartão do seguro, e laudo de vistoria.<br><br>

                    <h3><b><p class="texto" style="text-align:justify;">DO USO</b></h3><br><br>
                     <p class="texto" style="text-align:justify;">
                    <b>Cláusula 2ª.</b> O automóvel, objeto deste contrato, com destinação exclusiva
                    <b>para instrução de aula prática de direção veicular direcionada a pessoas
                    portadoras de necessidades especiais</b>, a ser ministrada pelo Centro de Formação de
                    Condutores, por intermédio de instrutor de trânsito devidamente credenciado pelo
                    <br>
                    

                     <p class="texto" style="text-align:justify;">
                    Departamento Estadual de Trânsito do Estado de Santa Catarina/SC – Detran/SC, cujo
                    RENACH foi previamente entregue a ATRAESC não sendo permitido o seu uso por
                    terceiros sob pena de rescisão contratual e o pagamento da multa prevista na Cláusula
                    5ª.<br><br>
                    <b>Parágrafo Primeiro:</b>
                     É vedado o deslocamento do veículo com propósito diferente a sua
                    destinação, e as aulas só podem ser ministradas no município sede do CFC com a
                    respectiva LADV emitida para o candidato.<br><br>
                    <b>Parágrafo Segundo:</b>
                     Aquele que causar quaisquer danos ao veículo se compromete em
                    repará-lo o mais breve possível e devolvê-lo nas condições expressas neste contrato. Em
                    caso de sinistro a CESSIONÁRIA deverá cobrir na íntegra o valor da franquia do seguro.<br><br>
                    DA DEVOLUÇÃO<br><br>
                    

                   

                     <img src="{{ URL::asset('images/logo_contrato.png'); }}"><br>
                             <h3><b><p class="texto" style="text-align:justify;">CONTRATO DE LOCAÇÃO DE AUTOMÓVEL DE PRAZO DETERMINADO</b></h3> 
                     <p class="texto" style="text-align:justify;">
                    <b>Cláusula 3ª.</b> A <b>CESSIONÁRIA</b> deverá devolver o automóvel à <b>CEDENTE</b> nas mesmas
                    condições em que estava quando o recebeu, ou seja, em perfeitas condições de uso.<br><br>

                    <b>Parágrafo primeiro.</b> O veículo será entregue pela ATRAESC ao Centro de Formação de
                    Condutores devidamente limpo e abastecido, devendo ser devolvido da mesma forma, ou
                    seja, com o abastecimento completo de seu tanque, em postos com bandeira,
                    considerando o combustível de qualidade e limpo.<br><br>


                    <b>Parágrafo Segundo:</b> A não devolução do carro limpo por parte da Cessionária
                    acarretará no pagamento de taxa de limpeza no valor de R$ 100,00 (cem reais).<br><br>

                    <b>Parágrafo terceiro:</b> Caso o veículo não esteja totalmente abastecido, será cobrado o
                    reembolso referente à despesa de abastecimento do veículo, com base nos preços
                    praticados pelos postos de combustível desta Capital acrescido de taxa administrativa de
                    R$ 50,00 (cinquenta reais).<br><br>

                    <b>Parágrafo quarto:</b> No tocante as chaves e documento de rodagem do veículo (CRLV),
                    caso não sejam devolvidos à Cedente, independentemente do motivo, diante da
                    impossibilidade de utilização do veículo por outros Associados, será cobrado multa no
                    valor de R$ 500,00 (quinhentos reais) por dia de atraso.<br><br>
                    <b>Parágrafo quinto:</b> Somente o recibo final de entrega do veículo e vistoria, fornecido pela
                    CEDENTE ATRAESC ou quem a represente, fará cessar a responsabilidade do Centro
                    de Formação de Condutores dando como regularmente devolvido o veículo cedido
                    locado. Esta situação verificar-se-á após o exato cumprimento de todas as obrigações
                    contratuais e da indenização de todos os danos que por ventura tenham sido causados
                    ao bem.
                    <b>CLAUSULA 4ª:</b> O Centro de Formação de Condutores declara para todos e devidos fins
                    ter recebido, nesta data, o veículo descrito na Clausula 1ª, em perfeito estado de
                    conservação e uso, comprometendo-se, até a data de sua devolução, a:<br><br>
                    Zelar pela guarda e conversação do veículo, se comprometendo a:<br><br>
                    1. Comunicar diretamente a ATRAESC a necessidade de manutenção ou eventual
                    reparo do veículo, não podendo qualquer procedimento ser realizado sem o prévio
                    consentimento e anuência da ATRAESC ou por pessoa não autorizada pela
                    Associação.<br>
                    2. Comunicar imediatamente a ATRAESC qualquer ocorrência relacionada ao veículo
                    em apreço, seja ela decorrente de dano, quebra, avaria, furto, roubo, entre outras
                    ocorridas;<br>
                    3. Comunicar imediatamente a ATRAESC em caso de cometimento de infrações de
                    trânsito;<br>
                    4. Pagar as multas por infração de trânsito, bem como realizar a transferência da
                    pontuação decorrente da infração de trânsito de sua responsabilidade, ou seja,
                    cometidas no período em que o veículo estava sob sua posse;<br>
                    5. Não utilizar o veículo para fins particulares;<br>
                    6. Devolver o veículo, imediatamente após a conclusão da instrução das aulas
                    práticas de direção veicular e exame prático de direção veicular, no mesmo estado
                    em que foi entregue com o abastecimento completo de seu tanque, devendo este
                    ser realizado em postos com bandeira, considerando o combustível de qualidade.<br>
                    7. Reparar eventuais danos ou avarias no veículo.
                    Parágrafo Único: Em caso de acidente quando da utilização do veículo, objeto do
                    presente termo, o Centro de Formação de Condutores responderá, civil, criminal e
                    administrativamente pelos danos eventualmente causados.
                    DO PRAZO<br><br>

                    <b>Cláusula 5ª.</b> O presente contrato de cessão terá o lapso temporal de validade de 3 dias,
                    iniciando no dia <b>{{$contrat->dia1}}</b>   e terminando no dia <b>{{$contrat->dia15}}</b>  data na qual o automóvel
                    deverá ser devolvido.

                    <b>Cláusula 6ª.</b> Se a <b>CESSIONÁRIA</b> não restituir o automóvel na data estipulada e os itens
                    previstos no parágrafo único da Cláusula 1ª, deverá pagar, enquanto detiver em seu
                    poder, multa no valor de R$ 500,00 (quinhentos reais) por dia de atraso na entrega do
                    veiculo cedido, e responderá pelo dano, que o automóvel venha a sofrer mesmo se
                    proveniente de caso fortuito.<br><br>

                    DA MULTA
                    CLAUSULA 7ª: Fica pactuado que caso alguma das partes não cumpra o disposto nas
                    clausulas estabelecidas no presente instrumento, responsabilizar-se-á a parte infratora
                    pelo pagamento da multa equivalente a 10% (dez por cento) do valor total do veículo, nos
                    termos da tabela publicada pela Fundação Instituto de Pesquisas Econômicas, vigente da
                    data da infração), além de pagamento de honorários advocatícios, estes já fixados em
                    20% (vinte por cento) do valor em comento.<br><br>

                    <b>Parágrafo Primeiro:</b>
                     A parte que descumprir quaisquer das clausulas do presente
                    instrumento dará a outra o direito de compensar a dívida pendente ou advinda da relação
                    contratual.<br><br>

                    <b>Parágrafo Segundo:</b>
                     Na data de entrega do veículo a cessionária assinará uma
                    promissória no valor de R$ 5.000,00 (cinco mil reais), a qual será executada em caso de
                    descumprimento de quaisquer cláusulas contratuais. Se cumpridas às exigências
                    contratuais a referida promissória será devolvida à cessionária.
                    DA RESCISÃO<br><br>

                    <b>Cláusula 8ª.</b>
                     É assegurado às partes a rescisão do presente contrato a qualquer
                    momento, desde que haja comunicação à outra parte com antecedência mínima de 10
                    (dez) dias.<br><br>
                    DO FORO<br><br>

                    <b>Cláusula 9ª.</b> Para dirimir quaisquer controvérsias oriundas do CONTRATO, as partes
                    elegem o foro da comarca de Florianópolis/SC;
                    Por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de
                    igual teor, juntamente com 2 (duas) testemunhas.

                                <p align="right"><b>Florianópolis, {{$contrat->created_at}}</b></p>
                                 <p class="texto" style="text-align:justify;">
                                 <img src="{{ URL::asset('images/assinatura.png'); }}"><br>
                                 ATRAESC: YOMARA JULITA RIBEIRO<br><br><br>




                                 ________________________________________________<br>
                                 CESSIONÁRIO:{{$contrat->razao_social}}<br><br>
                
                                 TESTEMUNHAS:<br>
                                 ________________________________________________<br>
                                 NOME:<br>
                                 ________________________________________________<br>
                                 CPF:<br><br>

                                 ________________________________________________<br>
                                 NOME:<br>
                                 ________________________________________________<br>
                                 CPF:


                </p>  <br>  <br>  <br>  <br>  <br>  <br><br><br><br><br><br><br><br><br>


                <p class="texto" style="text-align:justify;">


                 ENDEREÇO CONTATOS    sala    FONE:      E-MAIL:   WEB:       <br>
                    Rua Jornalista Manoel Menezes, n.115,
                     501, Florianópolis -SC
                    
                    (48) 4009-2919
                    
                    contato@atraesc.com.br
                  
                    www.atraesc.com.br                       
              
            @endforeach
            
     

    </body>
</html>
<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $genero = $_POST ["genero"]; 
    $tipo = $_POST ["tipo"];
    $epoca = $_POST ["epoca"];
    $msc = "";
    $descricao = "";
}
    // rock
    if($tipo == "mel" && $genero == "rock" && $epoca == "novas"){
        $msc = "Loneliness";
        $descricao = "<b>Banda: Decalius</b> <br><br> A música fala sobre o isolamento profundo, a alienação social e a completa ausência de esperança ou propósito de vida. Lançada no marcante álbum Dehumanizing Loneliness, a letra retrata a solidão não como uma escolha passageira, mas como uma condição inescapável e destrutiva.";
    }
    else if($tipo == "mel" && $genero == "rock" && $epoca == "antig"){
        $msc = "This I love";
        $descricao = "<b>Banda: Guns n' Roses</b> <br><br> A música é uma balada melancólica lançada no álbum Chinese Democracy (2008) que retrata a dor de uma separação e a recusa em deixar um amor acabar";
    }
    else if($tipo == "ani" && $genero == "rock" && $epoca == "novas"){
        $msc = "Emptiness machine";
        $descricao = "<b>Banda: Linkin Park</b> <br><br> A música 'The Emptiness Machine' do Linkin Park fala sobre a perda de identidade na busca por aceitação, manipulação e o ciclo desgastante de tentar se encaixar em expectativas alheias ou em sistemas que exigem que você sacrifique quem você é";
    }
    else if($tipo == "ani" && $genero == "rock" && $epoca == "antig"){
        $msc = "Livin' on a Prayer";
        $descricao = "<b>Banda: Bon Jovi</b> <br><br>A música conta a história de Tommy e Gina, um casal da classe trabalhadora que enfrenta dificuldades financeiras e barreiras na vida, mas se mantém unido pelo amor.";
    }

    //mpb
    elseif($tipo == "mel" && $genero == "mpb" && $epoca== "novas"){
        $msc= "Insista em mim";
        $descricao= "<b>Cantor: Ana Frango Elétrico</b> <br><br> A música 'Insista em Mim', de Ana Frango Elétrico, fala sobre vulnerabilidade, entrega total e afeto em um relacionamento";
    }
    elseif($tipo == "mel" && $genero == "mpb" && $epoca== "antig"){
        $msc= "Dedicada à ela";
        $descricao= "<b>Cantor: Arthur Verocai </b> <br><br>A música fala sobre a realidade de mães pobres da periferia, a desigualdade social, a violência urbana e o envolvimento de jovens com a criminalidade.";
    }
    elseif($tipo == "ani" && $genero == "mpb" && $epoca== "novas"){
        $msc= "Desmitificar";
        $descricao= "<b>Cantora: Marina Sena</b> <br><br> A música 'Desmitificar' de Marina Sena, parte do álbum Coisas Naturais (2025), fala sobre autenticidade feminina, quebra de idealizações e desejo livre de tabus.";
    }
    elseif($tipo == "ani" && $genero == "mpb" && $epoca== "antig"){
        $msc= "Apesar de você";
        $descricao= "<b>Cantor: Chico Buarque</b> <br><br>A música 'Apesar de Você', lançada por Chico Buarque em 1970, é uma crítica velada e irônica à ditadura militar brasileira e ao regime do presidente Emílio Médici";
    }
   

    //funk
    elseif($tipo == "mel" && $genero == "funk" && $epoca== "novas"){
        $msc= "Fala na Cara";
        $descricao= "<b>Cantor: MC paiva</b> <br><br> A música 'Fala na Cara' (de MC Paiva ZS) é ideal para ouvir em momentos de reflexão sobre relacionamentos, fossa ou término, e nostalgia amorosa";
    }
    elseif($tipo == "mel" && $genero == "funk" && $epoca== "antig"){
        $msc= "Maldita de ex";
        $descricao= "<b>Cantor: Mc Leozin </b> <br><br>A música 'Maldita de Ex' é o verdadeiro hino da recaída, do orgulho ferido e daquela famosa 'última vez' que todo mundo sabe que não vai ser a última.";
    }
    elseif($tipo == "ani" && $genero == "funk" && $epoca== "novas"){
        $msc= "Medley Relíquia";
        $descricao= "<b>Cantora: Mc Dricka</b> <br><br> O medley relíquia, que reúne clássicos do funk antigo (funk ostentação, funk proibidão ou funk de meados dos anos 2000 e 2010), é ideal para momentos que pedem nostalgia, energia lá no alto e resenha!";
    }
    elseif($tipo == "ani" && $genero == "funk" && $epoca== "antig"){
        $msc= "Vai Embrazando";
        $descricao= "<b>Cantor: DJ yuri martins</b> <br><br>A música 'Vai Embrazando' é o clássico funk paulista perfeito para momentos de alta energia, curtição e descontração.";
    }
    
    //pop
    elseif($tipo == "mel" && $genero == "pop" && $epoca== "novas"){
        $msc= "Good Luck, Babe!";
        $descricao= "<b>Cantora: Chappel Roan</b> <br><br> A música 'Fala na Cara' (de MC Paiva ZS) é ideal para ouvir em momentos de reflexão sobre relacionamentos, fossa ou término, e nostalgia amorosa";
    }
    elseif($tipo == "mel" && $genero == "pop" && $epoca== "antig"){
        $msc= "Total eclipse of the heart";
        $descricao= "<b>Cantora: Bonnie Tyler </b> <br><br>A música 'Maldita de Ex' é o verdadeiro hino da recaída, do orgulho ferido e daquela famosa 'última vez' que todo mundo sabe que não vai ser a última.";
    }
    elseif($tipo == "ani" && $genero == "pop" && $epoca== "novas"){
        $msc= "Telephone";
        $descricao= "<b>Cantora: Lady Gaga & Beyoncé</b> <br><br> O medley relíquia, que reúne clássicos do funk antigo (funk ostentação, funk proibidão ou funk de meados dos anos 2000 e 2010), é ideal para momentos que pedem nostalgia, energia lá no alto e resenha!";
    }
    elseif($tipo == "ani" && $genero == "pop" && $epoca== "antig"){
        $msc= "Material Girl";
        $descricao= "<b>Cantora: Madonna</b> <br><br>A música 'Vai Embrazando' é o clássico funk paulista perfeito para momentos de alta energia, curtição e descontração.";
    }

    //sertanejo
    elseif($tipo == "mel" && $genero == "sertanejo" && $epoca== "novas"){
        $msc= "Infiel";
        $descricao= "<b>Cantora: Marília Mendonça</b> <br><br> A música fala sobre a descoberta de uma traição e o fim de um relacionamento marcado pela desonestidade, transformando a dor em um manifesto de dignidade e força própria";
    }
    elseif($tipo == "mel" && $genero == "sertanejo" && $epoca== "antig"){
        $msc= "Sublime Renúncia";
        $descricao= "<b>Dupla: Leandro & Leonardo</b> <br><br>A música fala sobre a separação amorosa, abordada com um sentimento de aceitação dolorosa, maturidade e dignidade";
    }
    elseif($tipo == "ani" && $genero == "sertanejo" && $epoca== "novas"){
        $msc= "Descer pra BC";
        $descricao= "<b>Dupla: Brenno & Matheus </b> <br><br>A música fala sobre a fuga de um trabalhador rural (ou herdeiro do setor agrícola) que troca a vida no campo para ostentar, curtir festas e aproveitar as férias de fim de ano no litoral";
    }
    elseif($tipo == "ani" && $genero == "sertanejo" && $epoca== "antig"){
        $msc= "Pagode Russo";
        $descricao= "<b>Cantor: Luiz Gonzaga</b> <br><br>A música narra um sonho cômico em que o narrador está em Moscou dançando um pagode (no sentido antigo de festa ou reunião animada) em uma boate fictícia chamada Kossacou.";
    }

    else{
    header ("Location: index.html");
    exit;
}   
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musik - Especialista em música </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <img src="logomusik.png" width="520" alt="Musik Logo">

        <h2>Recomendação<br>꩜ <br><hr></h2>

        <p><em>Com base nas suas respostas, recomendamos:</em></p>
        <?php echo $msc, "🎵"; ?>
            <br><br><hr><br>
        <?php echo $descricao; ?>
        <br><br><br>
        <a href= "index.html" class="btn">
            <button type="submit">Responder novamente!</button>
        </a>

    </div>
</body>
</html>

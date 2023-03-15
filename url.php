

<?php //// INICIO CODIGO 


if (!empty($_GET['url'])) {
    $url = explode("/", $_GET['url']);
    if (empty($url[count($url) - 1])) {
        unset($url[count($url) - 1]);
    }

    switch ($url[0]) {

        case 'home':
            include('home.php');
            break;

            // ALUNOS		
        case 'perfil_aluno':
            $id = $url[1];
            $id2 = $url[2];
            include('perfil_aluno.php');
            break;

        case 'alunos':
            include('alunos.php');
            break;

        case 'relatorio_reposicao':
            include('relatorio_reposicao.php');
            break;

        case 'cadastrar_veiculo':
            include('cadastrar_veiculo.php');
            break;

        case 'listar_veiculo':
            $metodo = $url[1];
            $id = $url[2];
            include('listar_veiculo.php');
            break;

        case 'editar_veiculo':
            $id = $url[1];
            include('editar_veiculo.php');
            break;

        case 'cadastrar_fornecedores':
            include('cadastrar_fornecedores.php');
            break;

        case 'listar_fornecedores':
            $metodo = $url[1];
            $id = $url[2];
            include('listar_fornecedores.php');
            break;

        case 'editar_fornecedores':
            $id = $url[1];
            include('editar_fornecedores.php');
            break;

        case 'cadastrar_colaboradores':
            include('cadastrar_colaboradores.php');
            break;

        case 'listar_colaboradores':
            $metodo = $url[1];
            $id = $url[2];
            include('listar_colaboradores.php');
            break;

        case 'editar_colaboradores':
            $id = $url[1];
            include('editar_colaboradores.php');
            break;

        case 'confirmar_cadastro_veiculo':
            include('confirmar_cadastro_veiculo.php');
            break;

        case 'confirmar_cadastro_colaboradores':
            include('confirmar_cadastro_colaboradores.php');
            break;

        case 'confirmar_cadastro_fornecedor':
            include('confirmar_cadastro_fornecedor.php');
            break;

        case 'gerar_lista_nova':
            include('gerar_lista_nova.php');
            break;

            /// remover inicio

        case 'perfil_unidade2':
            $id = $url[1];
            include('perfil_unidade2.php');
            break;

            /// remover f

        case 'sair':
            include('sair.php');
            break;

            /// PAGINA 404
        default:
            include('404.php');
    }
}

?>	
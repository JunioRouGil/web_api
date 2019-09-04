<?php
        $url_api = 'https://api.URL.com.br';
        
        function fnc_listar_usuario (	$status, $pagina, $quantidade){

                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('listar_usuario'),true);

                $dados = "?status=" . $status . "&pagina=" . $pagina . "&quantidade=" . $quantidade;

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/usuario/' . $dados);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
        //	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:*********","Content-Type:application/json"));

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                            //$info['http_code'],
                            $retorno
                            //$erro
                     );	
        }

        function fnc_buscar_usuario ($cpf){

                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('buscar_usuario'),true);

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/usuario/' . $cpf);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
        //	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:*********","Content-Type:application/json"));

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                            //$info['http_code'],
                            $retorno
                            //$erro
                     );	
        }
        
        function fnc_editar_usuario ($array_dados){
            
                $cpf            = $array_dados[0];
                $nome           = $array_dados[1];
                $email_trab     = $array_dados[2];
                $email_pessoal  = $array_dados[3];
                $tel_fixo       = $array_dados[4];
                $tel_cel        = $array_dados[5];
                $sigla_estado   = $array_dados[6];
                $cidade         = $array_dados[7];
                
                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('editar_usuario'),true);

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/usuario/' . $cpf);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
                curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=".$nome."&email_trabalho=".$email_trab."&email_pessoal=".$email_pessoal."&telefone_fixo=".$tel_fixo."&telefone_celular=".$tel_cel."&federacao=".$sigla_estado."&endereco_estado=".$sigla_estado."&endereco_cidade=".$cidade);
                $retorno = curl_exec($ch);
                curl_close($ch);
                
                return  ($retorno);	
        }
        
        function fnc_cadastrar_usuario ($array_dados){
            
                $cpf            = $array_dados[0];
                $nome           = $array_dados[1];
                $email_pessoal  = $array_dados[2];
                
                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('salvar_usuario'),true);
                
                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/usuario');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token']));
                curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=".$nome."&documento=".$cpf."&email_pessoal=".$email_pessoal);
                $retorno = curl_exec($ch);
                // $erro = curl_error($ch);
                curl_close($ch);
                return ($retorno);
        }
        
        function fnc_deletar_usuario ($cpf){

                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('deletar_usuario'),true);

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/usuario/' . $cpf);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
        //	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:*********","Content-Type:application/json"));

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                        //$info['http_code'],
                        $retorno
                        //$erro
                     );	
        }

        function fnc_listar_escopoXPTO ($status,$pagina){

                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('escopoXPTO_listar'),true);

                $dados = "?status=" . $status . "&pagina=" . $pagina ;

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/escopoXPTO/' . $dados);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
        //	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:*********","Content-Type:application/json"));

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                        //$info['http_code'],
                        $retorno
                        //$erro
                        );	
        }

        function fnc_buscar_escopoXPTO ($id){

                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('escopoXPTO_buscar'),true);

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/escopoXPTO/' . $id);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                            //$info['http_code'],
                            $retorno
                            //$erro
                     );	
        }
        
        function fnc_editar_escopoXPTO ($array_dados){
            
                $id       = $array_dados[0];
                $status   = $array_dados[1];
                
                // GERANDO NOVO TOKEN PARA A REQUISIÇÃO
                $gerar_token = json_decode(fnc_gerar_token('escopoXPTO_editar'),true);

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/escopoXPTO/' . $id);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:".$gerar_token['token'],"Content-Type:application/json"));
                curl_setopt($ch, CURLOPT_POSTFIELDS, "status=".$status);
                $retorno = curl_exec($ch);
                curl_close($ch);
                
                return  ($retorno);	
        }
        
        function fnc_gerar_token ($scope){
            
                $array_scope = array( 1=>'listar_usuario', 2=>'buscar_usuario', 3=>'salvar_usuario', 4=>'editar_usuario', 5=>'deletar_usuario', 6=>'escopoXPTO_listar', 7=>'escopoXPTO_buscar', 8=>'escopoXPTO_editar');
                if(in_array($scope, $array_scope)){
                    $escopo = $scope;
                }

                $ch = curl_init();	
                curl_setopt($ch, CURLOPT_URL, $url_api . '/token');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "state=***********&redirect_uri=***********&client_id=***********&secret_id=***********&scope=" . $escopo);

                $retorno = curl_exec($ch);
                //$erro = curl_error($ch);
                curl_close($ch);
                //$info = curl_getinfo($ch);
                //var_dump ($info);
                return  (
                        //$info['http_code'],
                        $retorno
                        //$erro
                        );	
        }
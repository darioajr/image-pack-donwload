<?php

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="hering-image-api.test",
 *     basePath="/api/v1",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Hering PIM API",
 *         description=" A Hering PIM API foi desenvolvida para clientes que tenham a necessidade de integrar seus sistemas operacionais e e-coomerce com o Hering, automatizando o consumo e manutenção de dados da plataforma. Para tanto, são listados abaixo serviços (endpoints) baseados em RESTful JSON, para cada tipo de entidade a ser manipulada.\n\nEste conteúdo é direcionado para desenvolvedores e profissionais da área de sistemas de informação.\n\nSegurança e Autenticação\nPor razões de segurança, para ter êxito ao realizar uma requisição para a Hering API, a autenticação é necessária.\n\nA autenticação segue o padrão de segurança OAuth2, necessitando dois parâmetros: Client-ID e Client-Secret.\n\nEstes parâmetros devem ser obtidos por um usuário administrador a partir da plataforma Hering, acessando Configurações > API de Integração.\n\nA partir da obtenção destes parâmetros, deve-se utilizar a URL abaixo para obtenção do Token de autenticação a ser enviado no HEADER de cada requisição à API.\n\nhttp://hering-image-api.test/oauth/token?grant_type=client_credentials&client_id=<CLIENT-ID>&client_secret=<CLIENT-SECRET>\n\n",
 *         termsOfService="http://ciahering.com.br/terms/",
 *         @SWG\Contact(
 *             email="liliane.heiden@ciahering.com.br"
 *         ),
 *         @SWG\License(
 *             name="Apache 2.0",
 *             url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Utilizamos nossa documentação no padrão Swagger",
 *         url="http://swagger.io"
 *     )
 * )
 */

?>
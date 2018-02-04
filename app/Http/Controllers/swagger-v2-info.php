<?php

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="hering-image-api.test",
 *     basePath="/api/v1",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Hering PIM API",
 *         description=" A Hering PIM API foi desenvolvida para clientes que tenham a necessidade de integrar seus sistemas operacionais e e-commerce com a Hering, automatizando o consumo e manutenção de dados da plataforma. Para tanto, são listados abaixo serviços (endpoints) baseados em RESTful JSON, para cada tipo de entidade a ser manipulada.
          Este conteúdo é direcionado para desenvolvedores e profissionais da área de sistemas de informação.
          <br>
          <b>Segurança e Autenticação</b>
          Por razões de segurança, para ter êxito ao realizar uma requisição para a Hering API, a autenticação é necessária.\n\nA autenticação segue o padrão de segurança OAuth2, necessitando dos seguintes parâmetros: username, password, grant_type, client-id, client-secret.
          Estes parâmetros devem ser obtidos por um usuário administrador a partir de contato com a Hering.
          A partir da obtenção destes parâmetros, deve-se utilizar a URL abaixo para obtenção do Token de autenticação a ser enviado no HEADER de cada requisição à API:
    <b>POST /oauth/token HTTP/1.1
          Host: hering-image-api.test
          Content-Type: application/x-www-form-urlencoded
          Accept: application/json
          Cache-Control: no-cache
          client_id=<CLIENT_ID>&client_secret=<CLIENT_SECRET>&grant_type=password&username=<YOUR_EMAIL>&password=<YOUR_PASSWORD></b>",
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
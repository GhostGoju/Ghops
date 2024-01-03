<?php session_start();
if (!isset($_SESSION['rol'])) {
    header("Location: cmdDefaultLogin");
    exit;
}
require_once INCLUDES_TEMPLADE . "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?></php>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>

<body class="contenido">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <section class="listado-header">
            <p>Preguntas Frecuentes</p>
        </section>
        <div class="faq-contenedor">
            <div class="contenedor-d-faq" id="accordion">
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Cómo puedo hacer una compra en su sitio web?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <p>Realizar una compra en nuestro sitio web es rápido y sencillo. Sigue estos pasos para disfrutar de nuestros productos: <br>

                                <hr>
                            <ol>
                                <li><b>Explora nuestro catálogo:</b> Navega a través de nuestras categorías y descubre una amplia variedad de productos que se adaptan a tus necesidades.</>
                                <li><b>Selecciona tus artículos:</b> Haz clic en los productos que te interesen para ver detalles, características y precios. Añade los artículos deseados a tu carrito de compras con un simple clic en el botón "Agregar al carrito".</>
                                <li><b>Revisa tu carrito:</b> Una vez que hayas seleccionado todos los productos que deseas comprar, dirígete a tu carrito de compras. Aquí podrás revisar tu selección, ajustar cantidades y aplicar cualquier código de descuento si lo tienes.
                                <li><b>Proceso de pago:</b> Inicia sesión en tu cuenta si ya eres cliente o completa la información necesaria para crear una cuenta. Proporciona la dirección de envío y selecciona el método de pago preferido.</li>
                                <li><b>Confirmación del pedido:</b> Revisa detenidamente los detalles de tu pedido antes de confirmar la compra. Una vez que estés seguro de que todo es correcto, confirma la orden y realiza el pago.</li>
                                <li><b>Recibe tu confirmación:</b> Después de completar la compra, recibirás una confirmación por correo electrónico con los detalles de tu pedido. Mantén este correo electrónico como referencia y seguimiento.</li>
                                <li><b>¡Listo!</b> En pocos pasos, habrás realizado tu compra con éxito. Si encuentras algún problema durante el proceso, no dudes en ponerte en contacto con nuestro equipo de soporte, y estaremos encantados de ayudarte.</li>
                            </ol>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseTwo">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Ofrecen envío internacional?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>No, Ghops no ofrece envios a otros paises, por el momento solo ofrece servicio de venta en Colombia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-faq">
                    <a class="d-block-faq" data-toggle="collapse" href="#collapseThree">
                        <div class="card-header-faq">
                            <h5 class="card-title-faq">
                                ¿Qué métodos de pago aceptan?
                            </h5>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>En nuestro esfuerzo por brindarte una experiencia de compra conveniente y segura, aceptamos una variedad de métodos de pago. A continuación, te proporcionamos información sobre los métodos de pago disponibles en nuestro sitio web:
                                <hr>
                            <ul>
                                <li><b>PayPal:</b>Ofrecemos la opción de pago a través de PayPal, una plataforma de pago en línea segura y ampliamente utilizada. Si prefieres utilizar tu cuenta de PayPal, selecciona esta opción durante el proceso de pago y sigue las instrucciones para completar la transacción.</li>
                                <li><b>Transferencia bancaria:</b> También aceptamos pagos a través de transferencia bancaria. Si eliges esta opción, recibirás instrucciones detalladas sobre cómo completar la transferencia una vez que hayas confirmado tu pedido. Ten en cuenta que es posible que esta opción requiera un tiempo adicional para procesarse.</li>
                                <li><b>Pago contra entrega </b> (en ciertas regiones): En algunas regiones, ofrecemos la opción de pago contra entrega. Esto te permite pagar en efectivo al recibir tu pedido en la dirección especificada. Verifica la disponibilidad de esta opción durante el proceso de compra.</li>
                            </ul>

                            Garantizamos la seguridad de tus transacciones y protegemos la confidencialidad de tu información financiera. Si encuentras algún problema o tienes preguntas sobre los métodos de pago, no dudes en ponerte en contacto con nuestro equipo de soporte. Estamos aquí para asegurarnos de que tu experiencia de compra sea fluida y satisfactoria.</p>
                        </div>
                    </div>
                    <div class="card-faq">
                        <a class="d-block-faq" data-toggle="collapse" href="#collapseFour">
                            <div class="card-header-faq">
                                <h5 class="card-title-faq">
                                    ¿Cuánto tiempo se tarda en procesar y enviar mi pedido?
                                </h5>
                            </div>
                        </a>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>El tiempo de procesamiento y envío de tu pedido es una prioridad para nosotros, y nos esforzamos por brindar un servicio eficiente. Aquí tienes información detallada sobre los tiempos estimados:
                                    <hr>
                                <ul>
                                    <li><b>Procesamiento del pedido:</b> Una vez realizado el pago, nuestro equipo se ocupará de procesar tu pedido. Este proceso incluye la verificación de la información, la preparación de los productos y la asignación del envío. Por lo general, el tiempo de procesamiento varía entre 1 y 3 días hábiles, aunque este plazo puede ser afectado por factores como la disponibilidad de productos y la carga de trabajo.</li>
                                    <li><b>Envío:</b> Después de completar el proceso de procesamiento, tu pedido será enviado a la dirección que proporcionaste durante la compra. Los tiempos de envío varían según el destino y el método de envío seleccionado. Durante el proceso de compra, te proporcionaremos una estimación del tiempo de entrega. Ten en cuenta que los días hábiles no incluyen fines de semana ni días festivos.</li>
                                    <li><b>Notificación de envío: </b> Una vez que tu pedido haya sido enviado, recibirás una notificación por correo electrónico con los detalles de seguimiento. Esta información te permitirá rastrear el estado y la ubicación de tu pedido en tiempo real.</li>
                                    <li><b>Retrasos y problemas: </b> En casos excepcionales, como condiciones climáticas extremas o problemas logísticos, puede haber retrasos en la entrega. En tales situaciones, nos comprometemos a mantenerte informado y a trabajar para resolver cualquier problema de manera efectiva.</li>
                                </ul>

                                Si tienes preguntas específicas sobre el estado de tu pedido o si experimentas algún problema, no dudes en ponerte en contacto con nuestro equipo de atención al cliente. Estamos aquí para ayudarte y asegurarnos de que recibas tus productos de manera oportuna y en perfecto estado.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-faq">
                        <a class="d-block-faq" data-toggle="collapse" href="#collapseFive">
                            <div class="card-header-faq">
                                <h5 class="card-title-faq">
                                    ¿Cuál es su política de devolución?
                                </h5>
                            </div>
                        </a>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Entendemos que, en ocasiones, puedes necesitar devolver un producto. Nuestra política de devolución está diseñada para ofrecerte flexibilidad y satisfacción. Aquí están los detalles de nuestra política de devolución:
                                    <hr>
                                <ul>
                                    <li><b>Período de devolución: </b> Aceptamos devoluciones dentro de un plazo específico después de la fecha de entrega. Este período puede variar, pero normalmente es de 30 días desde que recibiste tu pedido. Asegúrate de revisar la fecha límite de devolución al realizar la compra.</li>
                                    <li><b>Condiciones del producto:</b> Los productos devueltos deben estar en condiciones originales, sin usar y con todas las etiquetas y embalajes originales. Nos reservamos el derecho de rechazar devoluciones de productos que no cumplan con estas condiciones.</li>
                                    <li><b>Proceso de devolución:</b>Para iniciar una devolución, ponte en contacto con nuestro equipo de atención al cliente. Te proporcionaremos instrucciones detalladas sobre cómo devolver el producto. Es posible que necesitemos información adicional, como fotos del artículo o detalles sobre el motivo de la devolución.</li>
                                    <li><b>Reembolso o cambio:</b> Una vez recibido el producto devuelto y verificado su estado, procesaremos el reembolso o el intercambio según tus preferencias. Ten en cuenta que los gastos de envío originales no son reembolsables, a menos que la devolución sea el resultado de un error nuestro.</li>
                                    <li><b>Productos defectuosos o dañados:</b> Si recibes un producto defectuoso o dañado, por favor, notifícanoslo lo antes posible. Estamos comprometidos a resolver estos problemas de manera rápida y efectiva, ya sea mediante un reembolso completo, un reemplazo o cualquier otra solución adecuada.</li>
                                </ul>
                                Recuerda revisar detenidamente la política de devolución específica de cada producto, ya que algunos artículos pueden tener condiciones particulares. Para cualquier pregunta o asistencia adicional, nuestro equipo de atención al cliente está disponible para ayudarte durante todo el proceso de devolución. Queremos asegurarnos de que tu experiencia de compra sea positiva y libre de preocupaciones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-faq">
                        <a class="d-block-faq" data-toggle="collapse" href="#collapseSix">
                            <div class="card-header-faq">
                                <h5 class="card-title-faq">
                                    ¿Ofrecen garantías en sus productos?
                                </h5>
                            </div>
                        </a>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Sí, nos enorgullece respaldar la calidad de nuestros productos y ofrecemos garantías para brindarte tranquilidad al realizar tus compras. Aquí te proporcionamos información sobre nuestra política de garantías:
                                    <hr>
                                <ol>
                                    <li> <b>Garantía del fabricante:</b> Muchos de nuestros productos están respaldados por la garantía del fabricante. Esta garantía puede variar según el producto y suele cubrir defectos de fabricación y funcionamiento durante un período específico. Asegúrate de revisar la documentación incluida con tu producto para obtener detalles específicos sobre la garantía del fabricante.</li>
                                    <li> <b>Proceso de reclamación de garantía: </b> Si experimentas algún problema cubierto por la garantía, por favor, ponte en contacto con nuestro equipo de atención al cliente. Te proporcionaremos instrucciones sobre cómo presentar una reclamación de garantía. Es posible que necesitemos información adicional, como pruebas fotográficas o detalles sobre el problema experimentado.</li>
                                    <li> <b>Garantías extendidas:</b> En algunos casos, también ofrecemos garantías extendidas como una opción adicional al realizar la compra. Estas garantías pueden proporcionar cobertura más allá de la garantía estándar del fabricante y ofrecer beneficios adicionales.</li>
                                    <li> <b>Exclusiones de garantía:</b> Es importante tener en cuenta que la garantía puede no cubrir daños causados por mal uso, accidentes o desgaste normal. Revisa cuidadosamente los términos y condiciones de la garantía para entender sus limitaciones y exclusiones.</li>
                                </ol>
                                Nos esforzamos por resolver cualquier problema que puedas tener con nuestros productos y garantizamos tu satisfacción en la medida de lo posible. Si tienes preguntas específicas sobre la garantía de un producto en particular o necesitas asistencia, no dudes en ponerte en contacto con nuestro equipo de atención al cliente. Estamos aquí para ayudarte a aprovechar al máximo tu experiencia de compra con nosotros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-faq">
                        <a class="d-block-faq" data-toggle="collapse" href="#collapseSeven">
                            <div class="card-header-faq">
                                <h5 class="card-title-faq">
                                    ¿Cómo protegen mis datos personales?
                                </h5>
                            </div>
                        </a>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>La protección de tus datos personales es de suma importancia para nosotros. Implementamos medidas de seguridad y seguimos las mejores prácticas para garantizar la confidencialidad y seguridad de la información que compartes con nosotros. Aquí te proporcionamos detalles sobre cómo protegemos tus datos personales:
                                    <hr>
                                <ul>
                                    <li> <b>Cifrado seguro:</b> Utilizamos tecnologías de cifrado seguro (SSL/TLS) durante la transmisión de datos para proteger la información sensible que ingresas en nuestro sitio web. Esto asegura que la información, como datos de tarjetas de crédito o información de inicio de sesión, se transmita de forma segura.</li>
                                    <li> <b>Almacenamiento seguro:</b> Tus datos personales se almacenan en entornos seguros con acceso restringido. Implementamos medidas de control de acceso y autenticación para garantizar que solo personal autorizado tenga acceso a la información.</li>
                                    <li> <b>Políticas de privacidad claras:</b> Tenemos políticas de privacidad detalladas que describen cómo recopilamos, utilizamos y protegemos tus datos personales. Te recomendamos revisar nuestra política de privacidad para entender completamente nuestras prácticas.</li>
                                    <li> <b>Actualizaciones y parches de seguridad:</b> Mantenemos nuestros sistemas y software actualizados con las últimas actualizaciones y parches de seguridad para mitigar posibles vulnerabilidades y garantizar la protección continua de tus datos.</li>
                                    <li> <b>Uso responsable de la información:</b> Nos comprometemos a utilizar tus datos personales solo para los fines para los cuales fueron recopilados. No compartiremos, venderemos ni proporcionaremos tu información a terceros sin tu consentimiento, excepto en casos legalmente requeridos.</li>
                                    <li> <b>Contraseñas seguras:</b> Si creas una cuenta en nuestro sitio web, alentamos el uso de contraseñas seguras y te proporcionamos herramientas para restablecer tu contraseña de manera segura en caso necesario.</li>
                                    <li> <b>Derechos de privacidad:</b> Respetamos tus derechos de privacidad y, cuando aplicable, proporcionamos opciones para que controles cómo se utilizan tus datos personales.</li>
                                </ul>
                                Si tienes preguntas específicas sobre cómo manejamos tus datos personales o si necesitas información adicional sobre nuestra política de privacidad, no dudes en ponerte en contacto con nuestro equipo de atención al cliente. Estamos comprometidos a proteger tu privacidad y garantizar una experiencia segura al utilizar nuestro sitio web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-faq">
                        <a class="d-block-faq" data-toggle="collapse" href="#collapseEight">
                            <div class="card-header-faq">
                                <h5 class="card-title-faq">
                                    ¿Qué hacen con mi información personal?
                                </h5>
                            </div>
                        </a>
                        <div id="collapseEight" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>En nuestro compromiso de respetar tu privacidad, solo recopilamos y utilizamos tu información personal de manera responsable y transparente. Aquí te proporcionamos detalles sobre cómo manejamos tu información personal:
                                    <hr>
                                <ul>
                                    <li> <b>Procesamiento para la compra:</b> Utilizamos tus datos personales, como nombre, dirección y detalles de contacto, para procesar y cumplir con tus pedidos. Esto incluye la entrega de productos y la gestión de transacciones financieras.</li>
                                    <li> <b>Comunicación y servicio al cliente:</b> Utilizamos tu información de contacto para comunicarnos contigo en relación con tu pedido, brindarte asistencia al cliente y responder a cualquier pregunta que puedas tener.</li>
                                    <li> <b>Mejora de productos y servicios:</b> Analizamos datos de forma agregada y anónima para entender las preferencias y comportamientos generales de nuestros clientes. Esto nos ayuda a mejorar la calidad de nuestros productos y servicios.</li>
                                    <li> <b>Marketing y comunicaciones:</b> Si has dado tu consentimiento, podemos utilizar tu información para enviarte comunicaciones de marketing, como ofertas especiales, promociones o actualizaciones de productos. Puedes optar por no recibir estas comunicaciones en cualquier momento.</li>
                                    <li> <b>Seguridad y prevención de fraudes:</b> Utilizamos medidas de seguridad para proteger contra el uso no autorizado y fraudulento de la información. Esto incluye la verificación de identidad y la detección de actividades sospechosas.</li>
                                    <li> <b>Cumplimiento legal:</b> En algunos casos, podemos procesar tu información personal para cumplir con obligaciones legales, como el cumplimiento de requisitos fiscales y la cooperación con autoridades gubernamentales.</li>
                                    <li> <b>Conservación de datos:</b> Conservamos tus datos personales durante el tiempo necesario para cumplir con los propósitos mencionados anteriormente y de acuerdo con las leyes aplicables. Cuando ya no necesitamos tu información, la eliminamos de manera segura.</li>
                                </ul>
                                Es importante destacar que no compartimos tu información personal con terceros no afiliados sin tu consentimiento, a menos que sea necesario para cumplir con tu solicitud o requerido por la ley. Para obtener más detalles sobre cómo manejamos tu información personal, te recomendamos revisar nuestra política de privacidad.
                                <br>
                                Si tienes preguntas específicas o deseas modificar tus preferencias de privacidad, no dudes en ponerte en contacto con nuestro equipo de atención al cliente. Estamos aquí para garantizar que tengas control sobre tu información y que tu experiencia con nosotros sea segura y satisfactoria.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?>
        <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
</body>

</html>
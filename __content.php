<?php

$site = [
    'home' => [
        'marcas' => [
            'title' => 'Transformamos Espaços, Criamos Histórias',
            'text'  => '<p>Na <strong>Prima design</strong>, cada peça é pensada para dar vida aos seus ambientes. Com três marcas únicas, oferecemos móveis que unem estilo, funcionalidade e personalidade.</p>',

            'posts' => [
                [
                    'img'   => './src/imgs/marca-prima_design.png',
                    'title' => 'Prima Design',
                    'text'  => 'Produtos em metal, polipropileno ou madeira, que empregam no processo produtivo avançada tecnologia.',
                ],
                [
                    'img'   => './src/imgs/marca-prima_store.png',
                    'title' => 'Prima Store',
                    'text'  => 'Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.',
                ],
                [
                    'img'   => './src/imgs/marca-prima_choice.png',
                    'title' => 'Prima Choice',
                    'text'  => 'Disponibiliza no mercado uma linha especial de componentes e acessórios para móveis.',
                ]
            ]
        ],
        'produtos' => [
            'title' => 'Explore por nossas categorias exclusivas',
            'text' => '<p>Encontre exatamente o que procura explorando nossas categorias cuidadosamente organizadas. De <strong>Cadeira</strong> a <strong>Smart</strong>, oferecemos uma seleção  ficada para atender às suas necessidades. Navegue e descubra as melhores opções disponíveis para você.</p>',
            'btn' => [
                'title' => 'Confira todas as nossas categorias',
                'url'   => './produtos',
                'icon'  => '<i class="fa-solid fa-arrow-right"></i>',
            ],
            'produto' => [
                [
                    'img'   => './upload/home-produto-01.png',
                    'title' => 'Cadeira 1',
                    'url' => './produtos',
                ],
                [
                    'img'   => './upload/home-produto-02.png',
                    'title' => 'Cadeira 2',
                    'url' => './produtos',
                ],
                [
                    'img'   => './upload/home-produto-03.png',
                    'title' => 'Cadeira 3',
                    'url' => './produtos',
                ],
            ],
            'action' => [
                'title' => 'Todas as nossas categorias',
                'btn'   => [
                    'title' => 'Confira',
                    'url'   => './produtos',
                    'icon'  => '<i class="fa-solid fa-arrow-right"></i>',
                ],
            ],
        ],
        'blog' => [
            'title' => 'Ultima postagem',
            'posts' => [
                [
                    'img'   => './upload/home-blog_post-01.png',
                    'title' => 'Titulo do post 1',
                    'url'   => './blog',
                ],
                [
                    'img'   => './upload/home-blog_post-02.png',
                    'title' => 'Titulo do post 2',
                    'url'   => './blog',
                ],
                [
                    'img'   => './upload/home-blog_post-02.png',
                    'title' => 'Titulo do post 3',
                    'url'   => './blog',
                ],
                [
                    'img'   => './upload/home-blog_post-01.png',
                    'title' => 'Titulo do post 4',
                    'url'   => './blog',
                ],
            ],
            'action' => [
                'title' => 'Veja todas as noticias',
                'url'   => './blog',
            ],
        ],
        'banner' => [
            'bg'    => './upload/banner-bg-01.png',
            'img'   => './src/imgs/marca-prima_store.png',
            'text'  => 'Anuncia a riqueza de combinações únicas e inusitados contrastes, reunindo ludismo, tecnologia e manufatura.',
        ],
    ],

    'sobre' => [
        'title' => 'Conheça a Prima design',
        'text'  => '<p>A Prima Design cria móveis inovadores, com detalhes exclusivos em aço e polipropileno, transformando ambientes residenciais e corporativos. Cada peça é uma expressão de originalidade e sofisticação no design.</p>',
        'img' => './upload/banner-bg-01.png',
        
        'historia' => [
            'title' => 'Nossa história',
            'timeline' => [
                [
                    'img'   => '<img src="./upload/sobre-timeline-01.png">',
                    'year'  => '1890',
                    'title' => 'Fundação e Propósito',
                    'text'  => '<p>Nasce a Prima Design, com a missão de aproximar pessoas através de produtos que primam pelo design e inovação. Desde o início, buscamos unir tecnologia, funcionalidade e estética para criar móveis únicos.</p>',
                ],
                [
                    'img'   => '<img src="./upload/sobre-timeline-02.png">',
                    'year'  => '1990',
                    'title' => '',
                    'text'  => '<p>Com sede em Bento Gonçalves (RS), passamos a atender não só o mercado nacional, mas também expandimos nossas coleções para o exterior.</p>',
                ],
                [
                    'img'   => '<ul><li><img src="./upload/sobre-timeline-03.1.png"></li><li><img src="./upload/sobre-timeline-03.2.png"></li><li><img src="./upload/sobre-timeline-03.3.png"></li></ul>',
                    'year'  => '2005',
                    'title' => 'O Surgimento das Três Coleções',
                    'text'  => '<p>Com sede em Bento Gonçalves (RS), passamos a atender não só o mercado nacional, mas também expandimos nossas coleções para o exterior.</p><ul><li><h4>Prima Design</h4><p>Móveis que unem tecnologia, funcionalidade e estética, com materiais como metal, madeira e polipropileno.</p></li><li><h4>Prima Store</h4><p>Linha criativa e sustentável, com peças personalizáveis e impacto social por meio do trabalho artesanal.</p></li></ul>',
                ],
            ]
        ],

        'valores' => [
            [
                'title' => 'Inovação',
                'text'  => '<p>Buscamos constantemente novas soluções, materiais e tecnologias para criar produtos que desafiem os limites do design tradicional, sempre com foco em qualidade e funcionalidade.</p>',
            ],
            [
                'title' => 'Sustentabilidade',
                'text'  => '<p>Nosso compromisso com o meio ambiente se reflete em cada etapa do processo produtivo, desde o uso de materiais sustentáveis até práticas que minimizam nosso impacto ecológico.</p>',
            ],
            [
                'title' => 'Excelência',
                'text'  => '<p>Cada peça da Prima é pensada e criada com rigoroso padrão de qualidade, desde o design até a produção, garantindo durabilidade e um acabamento impecável para nossos clientes.</p>',
            ],
        ],

        'designers' => [
            'title' => 'Assinado por Grandes Designers',
            'text'  => '<p>Cada peça da Prima carrega a assinatura de designers talentosos, que unem inovação, funcionalidade e estética para criar móveis e acessórios que fazem a diferença.</p>',
        ],
    ],

    'designers' => [
        [
            'title' => 'Designer',
            'name'  => 'Bernardo Senna',
            'img'   => './upload/designer-foto01.png',
            'bio'   => '<p>Ariel Missio é Tecnólogo em Produção Moveleira pela Universidade de Caxias de Sul. Atua como autônomo através da A.M Furniture Engineering onde tem como foco a engenharia de produtos e processos, qualidade, gestão e treinamento.</p><p>Natural de Espumoso/RS reside atualmente em Bento Gonçalves e ministra aulas sobre processos de fabricação de móveis em escola técnica local. Atuou como gerente industrial na parte de criação de produto e desde 2012 presta assessoria para a Prima Design.</p>',
            'redes' => ['https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com'],
        ],
        [
            'title' => 'Designer',
            'name'  => 'Ariel Missio',
            'img'   => './upload/designer-foto02.png',
            'bio'   => '<p>Ariel Missio é Tecnólogo em Produção Moveleira pela Universidade de Caxias de Sul. Atua como autônomo através da A.M Furniture Engineering onde tem como foco a engenharia de produtos e processos, qualidade, gestão e treinamento.</p><p>Natural de Espumoso/RS reside atualmente em Bento Gonçalves e ministra aulas sobre processos de fabricação de móveis em escola técnica local. Atuou como gerente industrial na parte de criação de produto e desde 2012 presta assessoria para a Prima Design.</p>',
            'redes' => ['https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com'],
        ],
        [
            'title' => 'Designer',
            'name'  => 'Eulália de Souza Anselmo',
            'img'   => './upload/designer-foto03.png',
            'bio'   => '<p>Ariel Missio é Tecnólogo em Produção Moveleira pela Universidade de Caxias de Sul. Atua como autônomo através da A.M Furniture Engineering onde tem como foco a engenharia de produtos e processos, qualidade, gestão e treinamento.</p><p>Natural de Espumoso/RS reside atualmente em Bento Gonçalves e ministra aulas sobre processos de fabricação de móveis em escola técnica local. Atuou como gerente industrial na parte de criação de produto e desde 2012 presta assessoria para a Prima Design.</p>',
            'redes' => ['https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com'],
        ],
    ],

    'produto' => [
        'title' => 'Explore por nossas categorias exclusivas',
        'text' => '<p>Encontre exatamente o que procura explorando nossas categorias cuidadosamente organizadas. De <strong>Cadeira</strong> a <strong>Smart</strong>, oferecemos uma seleção  ficada para atender às suas necessidades. Navegue e descubra as melhores opções disponíveis para você.</p>',

        'posts' => [
            [
                'img'   => './upload/produtos-img01.png',
                'title' => 'Cadeira 1',
                'url' => './produto',
            ],
            [
                'img'   => './upload/home-produto-02.png',
                'title' => 'Cadeira 2',
                'url' => './produto',
            ],
            [
                'img'   => './upload/produtos-img03.png',
                'title' => 'Cadeira 3',
                'url' => './produto',
            ],
            [
                'img'   => './upload/produtos-img04.png',
                'title' => 'Cadeira 4',
                'url' => './produto',
            ],
            [
                'img'   => './upload/produtos-img04.png',
                'title' => 'Cadeira 4',
                'url' => './produto',
            ],
            [
                'img'   => './upload/produtos-img04.png',
                'title' => 'Cadeira 4',
                'url' => './produto',
            ],
            [
                'img'   => './upload/produtos-img05.png',
                'title' => 'Cadeira 5',
                'url' => './produto',
            ],
        ],
    ],
];


/////////////////////////////////////////
/////////////////////////////////////////

class ArrayDot {
    private $data;

    public function __construct(array $array) {
        $this->data = $array;
    }

    public function __get($key) {
        return new self($this->data[$key] ?? []);
    }

    public function __toString() {
        return is_array($this->data) ? '' : (string)$this->data;
    }
}

function dot($array, $path) {
    $keys = explode('.', $path);
    $value = $array;
    
    foreach($keys as $key) {
        if(!isset($value[$key])) return null;
        $value = $value[$key];
    }
    
    return $value;
}

$cont = new ArrayDot($site);
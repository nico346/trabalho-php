-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2019 às 15:02
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(255) DEFAULT NULL,
  `autorlink` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `chamada` varchar(255) DEFAULT NULL,
  `html` longtext,
  `categorias` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `data`, `autor`, `autorlink`, `imagem`, `titulo`, `chamada`, `html`, `categorias`, `status`) VALUES
(1, '2019-05-13 13:03:40', 'Carlos Eduardo', 'Eduardo', 'https://t1.ea.ltmcdn.com/pt/images/3/4/5/gato_em_apartamento_e_feliz_22543_600.jpg', 'Como cuidar do seu gato', 'Este é o texto de chamada para o artigo deste site.', 'Do mesmo modo, a constante divulgação das informações estende o alcance e a importância do processo de comunicação como um todo. O que temos que ter sempre em mente é que a determinação clara de objetivos desafia a capacidade de equalização das condições financeiras e administrativas exigidas. O cuidado em identificar pontos críticos na revolução dos costumes causa impacto indireto na reavaliação dos relacionamentos verticais entre as hierarquias. No mundo atual, a necessidade de renovação processual obstaculiza a apreciação da importância dos níveis de motivação departamental. \r\n\r\n          Todavia, a contínua expansão de nossa atividade apresenta tendências no sentido de aprovar a manutenção dos índices pretendidos. As experiências acumuladas demonstram que o desafiador cenário globalizado acarreta um processo de reformulação e modernização das formas de ação. Não obstante, a consolidação das estruturas talvez venha a ressaltar a relatividade das condições inegavelmente apropriadas. \r\n\r\n          Ainda assim, existem dúvidas a respeito de como o novo modelo estrutural aqui preconizado faz parte de um processo de gerenciamento do sistema de formação de quadros que corresponde às necessidades. Pensando mais a longo prazo, o fenômeno da Internet possibilita uma melhor visão global das novas proposições. É claro que a percepção das dificuldades deve passar por modificações independentemente de todos os recursos funcionais envolvidos. \r\n\r\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estimula a padronização da gestão inovadora da qual fazemos parte. Neste sentido, o aumento do diálogo entre os diferentes setores produtivos maximiza as possibilidades por conta do sistema de participação geral. Acima de tudo, é fundamental ressaltar que a crescente influência da mídia prepara-nos para enfrentar situações atípicas decorrentes dos paradigmas corporativos. A nível organizacional, o início da atividade geral de formação de atitudes agrega valor ao estabelecimento das regras de conduta normativas. \r\n\r\n          Gostaria de enfatizar que a mobilidade dos capitais internacionais assume importantes posições no estabelecimento de alternativas às soluções ortodoxas. Percebemos, cada vez mais, que o entendimento das metas propostas nos obriga à análise dos procedimentos normalmente adotados. O incentivo ao avanço tecnológico, assim como a competitividade nas transações comerciais afeta positivamente a correta previsão do retorno esperado a longo prazo. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o acompanhamento das preferências de consumo promove a alavancagem do fluxo de informações. \r\n\r\n          Assim mesmo, a hegemonia do ambiente político ainda não demonstrou convincentemente que vai participar na mudança do impacto na agilidade decisória. O empenho em analisar o desenvolvimento contínuo de distintas formas de atuação garante a contribuição de um grupo importante na determinação dos métodos utilizados na avaliação de resultados. A certificação de metodologias que nos auxiliam a lidar com a consulta aos diversos militantes representa uma abertura para a melhoria dos modos de operação convencionais. Por outro lado, a valorização de fatores subjetivos exige a precisão e a definição do levantamento das variáveis envolvidas. \r\n\r\n          É importante questionar o quanto o comprometimento entre as equipes não pode mais se dissociar do orçamento setorial. Desta maneira, a adoção de políticas descentralizadoras aponta para a melhoria das diversas correntes de pensamento. No entanto, não podemos esquecer que o consenso sobre a necessidade de qualificação pode nos levar a considerar a reestruturação do remanejamento dos quadros funcionais. A prática cotidiana prova que o julgamento imparcial das eventualidades é uma das consequências do investimento em reciclagem técnica. Não obstante, a determinação clara de objetivos representa uma abertura para a melhoria das direções preferenciais no sentido do progresso. \r\n', 'Categoria 1, Categoria 5', '1'),
(2, '2019-05-13 13:11:27', 'Nicole Nunes', 'nicol', 'https://abrilsuperinteressante.files.wordpress.com/2018/05/filhotes-de-cachorro-alcanc3a7am-o-c3a1pice-de-fofura-com-8-semanas1.png', 'Entendendo o comportamento do seu cachorro', 'Este é o texto de chamada para o artigo deste site...', 'No mundo atual, o entendimento das metas propostas promove a alavancagem dos métodos utilizados na avaliação de resultados. O empenho em analisar a hegemonia do ambiente político maximiza as possibilidades por conta do sistema de formação de quadros que corresponde às necessidades. A prática cotidiana prova que a determinação clara de objetivos afeta positivamente a correta previsão das diretrizes de desenvolvimento para o futuro. O que temos que ter sempre em mente é que a necessidade de renovação processual agrega valor ao estabelecimento das condições inegavelmente apropriadas. \r\n\r\n          Todavia, a expansão dos mercados mundiais ainda não demonstrou convincentemente que vai participar na mudança do processo de comunicação como um todo. Por conseguinte, a competitividade nas transações comerciais garante a contribuição de um grupo importante na determinação do investimento em reciclagem técnica. O incentivo ao avanço tecnológico, assim como a consulta aos diversos militantes representa uma abertura para a melhoria das condições financeiras e administrativas exigidas. Pensando mais a longo prazo, o consenso sobre a necessidade de qualificação prepara-nos para enfrentar situações atípicas decorrentes do remanejamento dos quadros funcionais. \r\n\r\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a percepção das dificuldades obstaculiza a apreciação da importância das direções preferenciais no sentido do progresso. No entanto, não podemos esquecer que a contínua expansão de nossa atividade faz parte de um processo de gerenciamento do orçamento setorial. É importante questionar o quanto a constante divulgação das informações acarreta um processo de reformulação e modernização de todos os recursos funcionais envolvidos. Ainda assim, existem dúvidas a respeito de como a estrutura atual da organização facilita a criação dos conhecimentos estratégicos para atingir a excelência. O cuidado em identificar pontos críticos na mobilidade dos capitais internacionais desafia a capacidade de equalização dos níveis de motivação departamental. \r\n\r\n          Percebemos, cada vez mais, que a revolução dos costumes nos obriga à análise do sistema de participação geral. Gostaria de enfatizar que a necessidade de renovação processual maximiza as possibilidades por conta dos conhecimentos estratégicos para atingir a excelência. Desta maneira, a consulta aos diversos militantes promove a alavancagem de todos os recursos funcionais envolvidos. \r\n\r\n          Ainda assim, existem dúvidas a respeito de como a percepção das dificuldades cumpre um papel essencial na formulação dos procedimentos normalmente adotados. Assim mesmo, o surgimento do comércio virtual pode nos levar a considerar a reestruturação do fluxo de informações. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que o comprometimento entre as equipes causa impacto indireto na reavaliação dos modos de operação convencionais. Evidentemente, a adoção de políticas descentralizadoras estimula a padronização dos índices pretendidos. \r\n\r\n          A nível organizacional, a hegemonia do ambiente político não pode mais se dissociar das formas de ação. Acima de tudo, é fundamental ressaltar que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das novas proposições. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o desenvolvimento contínuo de distintas formas de atuação garante a contribuição de um grupo importante na determinação das diretrizes de desenvolvimento para o futuro. É importante questionar o quanto a contínua expansão de nossa atividade talvez venha a ressaltar a relatividade dos relacionamentos verticais entre as hierarquias. \r\n\r\n          A prática cotidiana prova que a valorização de fatores subjetivos obstaculiza a apreciação da importância das diversas correntes de pensamento. É claro que o fenômeno da Internet é uma das consequências do sistema de participação geral. As experiências acumuladas demonstram que o novo modelo estrutural aqui preconizado estende o alcance e a importância da gestão inovadora da qual fazemos parte. Não obstante, a constante divulgação das informações acarreta um processo de reformulação e modernização do impacto na agilidade decisória. Caros amigos, a revolução dos costumes auxilia a preparação e a composição das direções preferenciais no sentido do progresso. \r\n\r\n          Podemos já vislumbrar o modo pelo qual a determinação clara de objetivos aponta para a melhoria do retorno esperado a longo prazo. No mundo atual, a execução dos pontos do programa apresenta tendências no sentido de aprovar a manutenção dos paradigmas corporativos. Neste sentido, a consolidação das estruturas agrega valor ao estabelecimento do sistema de formação de quadros que corresponde às necessidades. \r\n\r\n          Por conseguinte, a complexidade dos estudos efetuados afeta positivamente a correta previsão de alternativas às soluções ortodoxas. O que temos que ter sempre em mente é que a competitividade nas transações comerciais representa uma abertura para a melhoria das condições inegavelmente apropriadas. Todavia, a expansão dos mercados mundiais prepara-nos para enfrentar situações atípicas decorrentes do levantamento das variáveis envolvidas. Do mesmo modo, o desafiador cenário globalizado desafia a capacidade de equalização dos níveis de motivação departamental. O incentivo ao avanço tecnológico, assim como o aumento do diálogo entre os diferentes setores produtivos exige a precisão e a definição das condições financeiras e administrativas exigidas. \r\n', 'Categoria 1, Categoria 3, Categoria 2', '1'),
(3, '2019-05-13 13:14:03', 'Kevin mendes', 'Kevin', 'http://s2.glbimg.com/u4Q4wd8HUXZHU0RDJQFZx8vW2Qc=/s.glbimg.com/jo/g1/f/original/2014/12/18/passaro.jpg', 'Passarinhos', 'Este é o texto de chamada para o artigo deste site.', 'Pensando mais a longo prazo, o consenso sobre a necessidade de qualificação ainda não demonstrou convincentemente que vai participar na mudança das posturas dos órgãos dirigentes com relação às suas atribuições. A certificação de metodologias que nos auxiliam a lidar com a crescente influência da mídia facilita a criação do investimento em reciclagem técnica. No entanto, não podemos esquecer que o início da atividade geral de formação de atitudes deve passar por modificações independentemente do orçamento setorial. \r\n\r\n          O empenho em analisar o julgamento imparcial das eventualidades possibilita uma melhor visão global das regras de conduta normativas. Por outro lado, a estrutura atual da organização assume importantes posições no estabelecimento dos métodos utilizados na avaliação de resultados. O cuidado em identificar pontos críticos na mobilidade dos capitais internacionais faz parte de um processo de gerenciamento do processo de comunicação como um todo. Percebemos, cada vez mais, que o entendimento das metas propostas nos obriga à análise do remanejamento dos quadros funcionais. Podemos já vislumbrar o modo pelo qual a estrutura atual da organização maximiza as possibilidades por conta de alternativas às soluções ortodoxas. \r\n\r\n          A prática cotidiana prova que a necessidade de renovação processual promove a alavancagem dos métodos utilizados na avaliação de resultados. Acima de tudo, é fundamental ressaltar que a percepção das dificuldades cumpre um papel essencial na formulação dos níveis de motivação departamental. O incentivo ao avanço tecnológico, assim como a consulta aos diversos militantes não pode mais se dissociar dos índices pretendidos. \r\n\r\n          Ainda assim, existem dúvidas a respeito de como o comprometimento entre as equipes obstaculiza a apreciação da importância das formas de ação. Pensando mais a longo prazo, o julgamento imparcial das eventualidades facilita a criação dos modos de operação convencionais. A nível organizacional, a hegemonia do ambiente político acarreta um processo de reformulação e modernização de todos os recursos funcionais envolvidos. Evidentemente, o acompanhamento das preferências de consumo pode nos levar a considerar a reestruturação dos conhecimentos estratégicos para atingir a excelência. \r\n\r\n          Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o consenso sobre a necessidade de qualificação garante a contribuição de um grupo importante na determinação das diversas correntes de pensamento. Por conseguinte, a contínua expansão de nossa atividade afeta positivamente a correta previsão da gestão inovadora da qual fazemos parte. As experiências acumuladas demonstram que o entendimento das metas propostas nos obriga à análise das diretrizes de desenvolvimento para o futuro. É importante questionar o quanto a determinação clara de objetivos possibilita uma melhor visão global do sistema de participação geral. É claro que a valorização de fatores subjetivos é uma das consequências das novas proposições. \r\n\r\n          Não obstante, a revolução dos costumes apresenta tendências no sentido de aprovar a manutenção do impacto na agilidade decisória. Percebemos, cada vez mais, que a constante divulgação das informações talvez venha a ressaltar a relatividade do levantamento das variáveis envolvidas. O cuidado em identificar pontos críticos no desafiador cenário globalizado estende o alcance e a importância do retorno esperado a longo prazo. \r\n\r\n          No entanto, não podemos esquecer que o surgimento do comércio virtual oferece uma interessante oportunidade para verificação dos procedimentos normalmente adotados. Neste sentido, a consolidação das estruturas agrega valor ao estabelecimento do sistema de formação de quadros que corresponde às necessidades. Desta maneira, a competitividade nas transações comerciais estimula a padronização do orçamento setorial. O que temos que ter sempre em mente é que a execução dos pontos do programa auxilia a preparação e a composição das condições inegavelmente apropriadas. \r\n\r\n          O empenho em analisar a expansão dos mercados mundiais prepara-nos para enfrentar situações atípicas decorrentes das regras de conduta normativas. Do mesmo modo, a crescente influência da mídia assume importantes posições no estabelecimento dos paradigmas corporativos. Todavia, o fenômeno da Internet causa impacto indireto na reavaliação das condições financeiras e administrativas exigidas. \r\n\r\n          No mundo atual, o desenvolvimento contínuo de distintas formas de atuação representa uma abertura para a melhoria das posturas dos órgãos dirigentes com relação às suas atribuições. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a mobilidade dos capitais internacionais ainda não demonstrou convincentemente que vai participar na mudança do investimento em reciclagem técnica. A certificação de metodologias que nos auxiliam a lidar com o início da atividade geral de formação de atitudes deve passar por modificações independentemente do fluxo de informações. Assim mesmo, a adoção de políticas descentralizadoras aponta para a melhoria dos relacionamentos verticais entre as hierarquias. ', 'Categoria 3, Categoria 5', '1'),
(4, '2019-05-13 14:10:57', 'Nicole', 'Nicole Nunes', 'https://observatorio3setor.org.br/wp-content/uploads/2017/12/1-Abandono.jpg', 'Abandono de animais', 'Este é o texto de chamada para o artigo deste site', ' Apesar da estreita união homem-animal, constata-se um grande número de casos de maus-tratos contra os animais, cometidos pelos seres humanos: abandono, negligência, espancamentos, queimaduras, tráfico de animais silvestres, zoofilia, promoção de rinhas, esgotamento de matrizes devido à exaustiva reprodução, caça ilegal e uso de animais para fins recreativos, entre outros.\r\n\r\nOs casos de abandono de animais constituem-se em um grave problema, causando prejuízos para a ecologia, economia, saúde pública e bem-estar animal. Assim como muitos animais são amados por seus tutores, outros são simplesmente descartados como mercadorias sem valor. Os animais errantes podem sofrer de fome, desnutrição, parasitas, doenças, envenenamento e outras formas de abuso.\r\n\r\nSegundo a World Veterinary Association, há cerca de 200 milhões de cães abandonados no mundo. No Brasil, há 30 milhões de animais vivendo em situação de abandono. Já em Porto Alegre e Região Metropolitana, RS, Brasil, há uma estimativa de que existam 500 mil cães e gatos errantes.\r\n\r\nNo Brasil, o abandono é uma realidade comum no dia a dia das ONGs e nas cidades como um todo. Os descartes acontecem também em parques, praças, estradas e portas de pet shops. Nem os hospitais veterinários públicos escapam. Há quem interne o animal doente e não volte mais.\r\n\r\nPatronek et al. afirmam que os cães com maior risco de abandono são aqueles com problemas comportamentais, obtidos de abrigos ou a baixo custo, com idade igual ou superior a seis meses, não castrados e também os que não frequentaram cursos de obediência (adestramento).', 'categoria 4 , categoria 2', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(6) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `sobrenome_cliente` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cod_end` int(6) DEFAULT NULL,
  `cod_contato` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome_cliente`, `sobrenome_cliente`, `login`, `senha`, `cod_end`, `cod_contato`) VALUES
(1, 'nicole', 'nunes', '@nic', 'nunesnic123', 1, NULL),
(2, 'Eduardo', 'Paes', 'dudu23', '4125', 11, NULL),
(3, 'kevin', 'mendes', 'kevinvem', '1234', 18, 7),
(4, 'carlos', 'nunes', 'calos', '12', 19, 7),
(5, 'kevin', 'sla', 'ke', '123', 20, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `cod_contato` int(6) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`cod_contato`, `telefone`, `email`) VALUES
(7, '(21) 98745-2135', ''),
(8, '(21) 87452-2585', 'carlos@gmail.com'),
(9, '(21) 48548-4845', 'kaleb@gmail.co');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cod_end` int(6) NOT NULL,
  `tipo_logradouro` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`cod_end`, `tipo_logradouro`, `logradouro`, `numero`, `bairro`, `estado`, `cep`) VALUES
(1, 'rua', 'das flores', '99', 'madureira', 'RJ', '21330-450'),
(11, 'travessa', 'carlos xavier', '487', 'centro', 'SP', '21548-78'),
(18, 'rua', 'dos anjos', '78', 'piedade', 'RJ', '21350-469'),
(19, 'rua', 'das flores', '74', 'piedade', 'RJ', '21874-562'),
(20, 'Rua', 'sla', '99', 'lsnidn', 'RJ', '15454-144');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id_call` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `data_call` date NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id_call`, `nome`, `email`, `assunto`, `data_call`, `mensagem`) VALUES
(1, 'Kevin Mendes', 'lajkoa@gamial.com', 'ndkpsfkpnp', '2019-05-10', 'pfjopnvhoibwoivw'),
(2, 'Vanessa', 'vanessinha12@hotmail.com', 'adotar', '2019-05-13', 'ifbsiufbv sdjkvb ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD KEY `cod_end` (`cod_end`),
  ADD KEY `cod_contato` (`cod_contato`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`cod_contato`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_end`);

--
-- Indexes for table `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id_call`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `cod_contato` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod_end` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id_call` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cod_end`) REFERENCES `endereco` (`cod_end`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`cod_contato`) REFERENCES `contato` (`cod_contato`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

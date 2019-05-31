

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- Estrutura da tabela `categorias`


CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Extraindo dados da tabela `categorias`


INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Vestidos'),
(2, 'Blusas'),
(3, 'Sapatos'),
(4, 'Calca'),
(5, 'Saias');


-- Estrutura da tabela `produtos`


CREATE TABLE `produtos` (
  `id` int(1) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Extraindo dados da tabela `produtos`

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`) VALUES
(4, 'Vestido', '20.00', '894293', 5, 0);

-- --------------------------------------------------------


-- Estrutura da tabela `usuarios`


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Extraindo dados da tabela `usuarios`


INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `sobrenome`, `ativo`) VALUES
(1, 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'Control', 1),


-- Indexes for dumped tables



-- Indexes for table `categorias`

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);


-- Indexes for table `produtos`

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `usuarios`

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for dumped tables



-- AUTO_INCREMENT for table `categorias`

ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


-- AUTO_INCREMENT for table `produtos`

ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


-- AUTO_INCREMENT for table `usuarios`

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

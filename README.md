# Galeria de fotos para Kern Studio

<a href="https://kernstudio.com.br">Kern Studio</a> é uma empresa que produz imagens realistas de projetos arquitetônicos não construídos, e precisava de uma <a href="https://kernstudio.com.br/gallery">galeria</a> de fotos para expor seu trabalho em formato de um grid que permitisse escolher a quantidade de imagens por fileira, possibilitando a setorização por projeto e que fosse de fácil manutenção por uma pessoa leiga em código. 

<p align="center">
  <img src="gallery-img.PNG" alt="Imagem da galeria" width="600px">
</p>

O objetivo era implementar um código em CSS e JavaScript que, independente das dimensões das imagens e da quantidade de imagens por fileira, não desmonta o grid:

<ul>
  <li>Visto que o cliente utiliza o WordPress como host para o site, foi definido um prefixo do campo ACF (Advanced Custom Fields) para armazenar as imagens. Com isso, foi criado um Field Group para a galeria contendo 60 fields, todos vinculados a um prefixo ACF. Dessa forma, na página da galeria, é possível escolher quais imagens estarão vinculadas a cada field.</li>
  <li>Foi criado um loop de 1 até 60 e uma função do ACF para pegar a imagem do campo k_gallery_1, depois k_gallery_2 e assim por diante.</li>
  <li>O ACF retorna, junto com a URL da imagem, várias versões da mesma imagem em diferentes tamanhos. Isso é usado para permitir responsividade: o navegador escolhe qual versão carregar de acordo com a tela.</li>
  <li>Utilização de loading="lazy" para que as imagens só carreguem quando o usuário rola a página até elas, melhorando o desempenho.</li>
  <li>Utilização de CSS ‘nth-child’ para criar um layout assimétrico e mais dinâmico, definindo quantas imagens estarão presentes em cada fileira.</li>
  <li>Dessa forma, hoje o cliente possui a autonomia desejada para atualizar a galeria quando quiser e de maneira simples: precisa apenas acessar a página da galeria e alterar diretamente a imagem do field desejado.</li>
</ul>



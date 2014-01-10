(function($) {
if (elFinder && elFinder.prototype.options && elFinder.prototype.options.i18n) 
	elFinder.prototype.options.i18n.pt = {
		/* errors */
		'Root directory does not exists'        : 'O diretório raiz não existe',
		'Unable to connect to backend'          : 'Não é possível conectar ao servidor',
		'Acess denied'                         : 'Aceso negado',
		'Invalid backend configuration'         : 'A resposta do servidor está incorreta',
		'Unknown command'                       : 'Comando desconhecido',
		'Command not allowed'                   : 'Você não pode executar este comando',
		'Invalid parameters'                    : 'Parâmetros incorretos',
		'File not found'                        : 'Arquivo não encontrado',
		'Invalid name'                          : 'Nome incorreto',
		'File or folder with the same name already exists' : 'Já existe um arquivo ou um diretório com esse nome',
		'Unable to rename file'                 : 'Não é possível renomear diretório',
		'Unable to create folder'               : 'Não foi possível criar diretório',
		'Unable to create file'                 : 'Não é possível criar o arquivo',  
		'No file to upload'                     : 'Não há arquivos para upload',
		'Select at least one file to upload'    : 'Selecione, como mínimo un arquivo, para Enviar',
		'File exceeds the maximum allowed filesize' : 'O tamanho do arquivo é maior que o tamanho máximo permitido',
		'Data exceeds the maximum allowed size' : 'Os dados excede o tamanho máximo permitido',
		'Not allowed file type'                 : 'Tipo de arquivo não permitido',
		'Unable to upload file'                 : 'Não é possível fazer upload do arquivo',
		'Unable to upload files'                : 'Não é possível fazer upload de arquivos',
		'Unable to remove file'                 : 'Não é possível excluir o arquivo',
		'Unable to save uploaded file'          : 'Não foi possível salvar o arquivo carregado',
		'Some files was not uploaded'           : 'Alguns arquivos não foram enviados',
		'Unable to copy into itself'            : 'Não pode ser copiado dentro de si mesmo',
		'Unable to move files'                  : 'Não é possível mover arquivos',
		'Unable to copy files'                  : 'Não é possível copiar arquivos',
		'Unable to create file copy'            : 'Não é possível criar copias do arquivo',
		'File is not an image'                  : 'Este não é um arquivo de imagem',
		'Unable to resize image'                : 'Não é possível redimensionar a imagem',
		'Unable to write to file'               : 'Não foi possível gravar o arquivo',
		'Unable to create archive'              : 'Não é possível criar o arquivo',
		'Unable to extract files from archive'  : 'Não é possível remover o arquivo a partir do arquivo',
		'Unable to open broken link'            : 'Não é possível abrir um link quebrado',
		'File URL disabled by connector config' : 'Acesso a caminhos de arquivo é proibida na configuração do conector',
		/* statusbar */
		'items'          : 'itens',
		'selected items' : 'itens selecionados',
		/* commands/buttons */
		'Back'                    : 'Voltar',
		'Reload'                  : 'Atualizar',
		'Open'                    : 'Abrir',
		'Preview with Quick Look' : 'Prévia Rápida',
		'Select file'             : 'Selecionar arquivo',
		'New folder'              : 'Nova pasta',
		'New text file'           : 'Novo arquivo',
		'Upload files'            : 'Enviar arquivos',
		'Copy'                    : 'Copiar',
		'Cut'                     : 'Recortar',
		'Paste'                   : 'Colar',
		'Duplicate'               : 'Duplicar',
		'Remove'                  : 'Excluir',
		'Rename'                  : 'Renomear',
		'Edit text file'          : 'Editar arquivo',
		'View as icons'           : 'Ícones',
		'View as list'            : 'Lista',
		'Resize image'            : 'Tamanho de imagem',
		'Create archive'          : 'Novo arquivo',
		'Uncompress archive'      : 'Extrair arquivo',
		'Get info'                : 'Propriedades',
		'Help'                    : 'Ajuda',
		'Dock/undock filemanger window' : 'Desafixar/fixar o gerenciador de arquivos na página',
		/* upload/get info dialogs */
		'Maximum allowed files size' : 'Tamanho máximo do arquivo',
		'Add field'   : 'Adicionar campo',
		'File info'   : 'Propriedades de arquivo',
		'Folder info' : 'Propriedades de pasta',
		'Name'        : 'Nome',
		'Kind'        : 'Tipo',
		'Size'        : 'Tamanho',
		'Modified'    : 'Modificado',
		'Permissions' : 'Permissões',
		'Link to'     : 'Link para',
		'Dimensions'  : 'Dimensões',
		'Confirmation required' : 'Confirmação requerida',
		'Are you shure you want to remove files?<br /> This cannot be undone!' : 'Você vai excluir o Arquivo?<br/> Esta ação é irreversível.',
		/* permissions */
		'read'        : 'leitura',
		'write'       : 'escrita',
		'remove'      : 'exclusão',
		/* dates */
		'Jan'         : 'Jan',
		'Feb'         : 'Fev',
		'Mar'         : 'Mar',
		'Apr'         : 'Abr',
		'May'         : 'Mai',
		'Jun'         : 'Jun',
		'Jul'         : 'Jul',
		'Aug'         : 'Ago',
		'Sep'         : 'Set',
		'Oct'         : 'Out',
		'Nov'         : 'Nov',
		'Dec'         : 'Dez',
		'Today'       : 'Hoje',
		'Yesterday'   : 'Ontem',
		/* mimetypes */
		'Unknown'                           : 'Desconhecido',
		'Folder'                            : 'Pasta',
		'Alias'                             : 'Link',
		'Broken alias'                      : 'Link quebrado',
		'Plain text'                        : 'Texto',
		'Postscript document'               : 'Documento postscript',
		'Application'                       : 'Aplicativo',
		'Microsoft Office document'         : 'Documento Microsoft Office',
		'Microsoft Word document'           : 'Documento Microsoft Word',  
		'Microsoft Excel document'          : 'Documento Microsoft Excel',
		'Microsoft Powerpoint presentation' : 'Documento Microsoft Powerpoint',
		'Open Office document'              : 'Documento Open Office',
		'Flash application'                 : 'Aplicativo Flash',
		'XML document'                      : 'Documento XML',
		'Bittorrent file'                   : 'Arquivo bittorrent',
		'7z archive'                        : 'Arquivo 7z',
		'TAR archive'                       : 'Arquivo TAR',
		'GZIP archive'                      : 'Arquivo GZIP',
		'BZIP archive'                      : 'Arquivo BZIP',
		'ZIP archive'                       : 'Arquivo ZIP',
		'RAR archive'                       : 'Arquivo RAR',
		'Javascript application'            : 'Aplicativo Javascript',
		'PHP source'                        : 'Documento PHP',
		'HTML document'                     : 'Documento HTML',
		'Javascript source'                 : 'Documento Javascript',
		'CSS style sheet'                   : 'Documento CSS',
		'C source'                          : 'Documento C',
		'C++ source'                        : 'Documento C++',
		'Unix shell script'                 : 'Script Unix shell',
		'Python source'                     : 'Documento Python',
		'Java source'                       : 'Documento Java',
		'Ruby source'                       : 'Documento Ruby',
		'Perl script'                       : 'Script Perl',
		'BMP image'                         : 'Imagem BMP',
		'JPEG image'                        : 'Imagem JPEG',
		'GIF Image'                         : 'Imagem GIF',
		'PNG Image'                         : 'Imagem PNG',
		'TIFF image'                        : 'Imagem TIFF',
		'TGA image'                         : 'Imagem TGA',
		'Adobe Photoshop image'             : 'Imagem Adobe Photoshop',
		'MPEG audio'                        : 'Audio MPEG',
		'MIDI audio'                        : 'Audio MIDI',
		'Ogg Vorbis audio'                  : 'Audio Ogg Vorbis',
		'MP4 audio'                         : 'Audio MP4',
		'WAV audio'                         : 'Audio WAV',
		'DV video'                          : 'Video DV',
		'MP4 video'                         : 'Video MP4',
		'MPEG video'                        : 'Video MPEG',
		'AVI video'                         : 'Video AVI',
		'Quicktime video'                   : 'Video Quicktime',
		'WM video'                          : 'Video WM',
		'Flash video'                       : 'Video Flash',
		'Matroska video'                    : 'Video Matroska',
		// 'Shortcuts' : 'Клавиши',		
		'Select all files' : 'Selecionar todos os arquivos',
		'Copy/Cut/Paste files' : 'Copiar/Recortar/Colar arquivos',
		'Open selected file/folder' : 'Abrir pasta/arquivo',
		'Open/close QuickLook window' : 'Abrir/fechar janela de visualização',
		'Remove selected files' : 'Excluir arquivos selecionados',
		'Selected files or current directory info' : 'Informações sobre os arquivos selecionados na pasta atual',
		'Create new directory' : 'Nova pasta',
		'Open upload files form' : 'Abrir formulário para enviar arquivos',
		'Select previous file' : 'Selecionar o arquivo anterior',
		'Select next file' : 'Selecionar o arquivo seguinte',
		'Return into previous folder' : 'Voltar a pasta anterior',
		'Increase/decrease files selection' : 'Aumentar/diminuir a seleção de arquivos',
		'Authors'                       : 'Autores',
		'Sponsors'  : 'Colaboradores',
		'elFinder: Web file manager'    : 'elFinder: Gerenciador de Arquivos',
		'Version'                       : 'Versão',
		'Copyright: Studio 42 LTD'      : 'Copyright: Studio 42',
		'Donate to support project development' : 'Desenvolvimento da Ajuda',
		'Javascripts/PHP programming: Dmitry (dio) Levashov, dio@std42.ru' : 'Programação Javascript / php: Dmitry (ele) Levashov, dio@std42.ru',
		'Python programming, techsupport: Troex Nevelin, troex@fury.scancode.ru' : 'Python programação, suporte técnico: Troex Nevelin, troex@fury.scancode.ru',
		'Design: Valentin Razumnih'     : 'Design: Razumnyh Valentin',
		'Spanish localization'          : 'Tradução para o Português: Francis Rebouças',
		'Icons' : 'Icones',
		'License: BSD License'          : 'Licencia: BSD License',
		'elFinder documentation'        : 'Documentação elFinder',
		'Simple and usefull Content Management System' : 'Um simples e fácil CMS',
		'Support project development and we will place here info about you' : 'Ajuda com desenvolvimento de produtos e informações sobre você aparecerá aqui.',
		'Contacts us if you need help integrating elFinder in you products' : 'ElFinder perguntar se você deseja integrar em seu produto.',
		'elFinder support following shortcuts' : 'elFinder suporta seguintes atalhos de teclado',
		'helpText' : 'elFinder funciona como o Gerenciador de Arquivos para o seu PC. <br /> Você pode manipular os arquivos com a ajuda do painel superior, o menu ou atalhos do teclado. Para mover Arquivo / colar simplesmente arrastá-los para a pasta desejada. Se você pressionar simultaneamente a tecla Shift, o arquivo será copiado.'	
		};
	
})(jQuery);

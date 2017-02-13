<?PHP

// not the cleanest thing to do idd, time wise will do
// alternatives are .gitignore, learn the full actual flow or installing runkit

// this file is in the .gitignore, so working-directory wise git will be clean always
defined('YII_ENV_DEV') or define('YII_ENV_DEV', true);

if (YII_ENV_DEV === true || YII_ENV_DEV === 1){
	defined('YII_DEBUG') or define('YII_DEBUG', true);
	defined('YII_ENV') or define('YII_ENV', 'dev');
}else{
	defined('YII_DEBUG') or define('YII_DEBUG', false);
	defined('YII_ENV') or define('YII_ENV', 'prod');
}
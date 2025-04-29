#!/bin/bash
echo "Xoro, iniciando todo.\n"
/opt/lampp/lampp start
npm run dev -- --host 0.0.0.0 --port 3000 &
/opt/lampp/bin/php artisan serve --host=0.0.0.0 --port=3001 &
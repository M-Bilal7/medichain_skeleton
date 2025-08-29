## Quick next steps (dev)
1. Backend (Laravel-like service):
   - `cd backend` and run `composer install` (requires PHP & Composer). Create `.env` and set DB connections.
   - Run migrations (MySQL) and seed commands as required.

2. Frontend (React TypeScript):
   - `cd frontend` and run `npm install && npm run dev` (requires Node.js >=18).
   - Configure API base URL in `.env`.

3. Docker (dev):
   - `docker-compose up --build` to bring up MySQL and Mongo (demo). You still need to build backend images or run services locally.

Notes: This skeleton contains placeholders and example files to help you scaffold the real implementation quickly.

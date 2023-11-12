<div align='center'>
<img src="https://www.positivethinking.tech/wp-content/uploads/2021/01/Logo-Vuejs.png" alt="Logo">
<h1>E-commerce V1</h1>
<p>Application E-commerce Laravel and VueJs</p>
</div>

# Application E-Commerce V1

- [x] API Composition
- [x] Cart Count
- [x] Gestion des quantités
- [x] Paiement avec Stripe
- [x] Enregistrement des commandes
- [x] Notifications Toasts

## :toolbox: Getting Started

### :gear: Installation

Duplicate the .env.example file and name it .env. 
Adjust the settings in the .env file and add your Stripe secret and public keys.
```bash
STRIPE_TEST_PUBLIC_KEY=your_stipe_public_key
STRIPE_TEST_SECRET_KEY=your_stipe_secret_key
```
Install via Composer
```bash
composer install
```
Generate Application Key
```bash
php artisan key:generate
```
Migrate Database/Models
```bash
php artisan migrate --seed
```
Run seeder
```bash
php artisan db:seed
```
Install Dependencies
```bash
npm install

npm run dev
```
or
```bash
npm run watch
```
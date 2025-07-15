
# QuickBillr

> Modern SaaS Invoice & Receipt Generator

## Tech Stack

- PHP 8+, Laravel 12, MySQL/PostgreSQL
- Tailwind CSS (custom palette), Livewire, Alpine.js
- Dompdf/SnappyPDF for PDF export
- Stripe/Razorpay for payments
- Mailgun/SendGrid for email

## Features

- User signup/login (secure auth)
- Create invoices (clients, line items, taxes)
- Dynamic PDF export (download/share)
- Invoice history (sent, paid, pending)
- Client management (profiles, autofill)
- Multi-currency support
- Custom branding (logo, business name)
- Dashboard (income/month, outstanding balance)

## UI

- Modern, gradient-rich design
- Colors: #0000cc, #000066, #0000aa, #000088
- Responsive and accessible

## Getting Started

1. Clone the repo
2. Copy `.env.example` to `.env` and set DB/keys
3. Install dependencies:
   - `composer install`
   - `npm install && npm run build`
4. Generate app key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Start server: `php artisan serve`

## Deployment

- Ready for Render or any PHP host
- Set environment variables in production
- Run `php artisan migrate --force` and `npm run build` before deploy

## License

MIT

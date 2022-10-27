import { InvoiceProduct } from './invoiceProduct';

export interface Product {
  id: number,
  name: string,
  description: string,
  sku: string,
  price: number,
  pivot: InvoiceProduct,
  created_at: Date,
  updated_at: Date
}

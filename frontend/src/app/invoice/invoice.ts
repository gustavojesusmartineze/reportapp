import { Status } from './status';
import { Client } from './client';
import { Product } from './product';

export interface Invoice {
  id: number;
  status: Status;
  total: number;
  client: Client;
  products: Product[];
}

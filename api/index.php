// Vercel Serverless Function Handler
// Path: api/index.js

export default async function handler(req, res) {
  // 1. Setup CORS Headers
  const origin = req.headers.origin || '*';
  res.setHeader('Access-Control-Allow-Origin', origin);
  res.setHeader('Access-Control-Allow-Credentials', 'true');
  res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
  );

  // 2. Handle OPTIONS preflight request
  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  try {
    const { method, query, body } = req;

    // 3. Routing Berdasarkan HTTP Method
    switch (method) {
      case 'GET': {
        const name = query.name || 'World';
        return res.status(200).json({
          status: 'success',
          message: `Hello, ${name}!`,
          timestamp: new Date().toISOString()
        });
      }

      case 'POST': {
        // Validasi Body Request
        if (!body || typeof body !== 'object' || Object.keys(body).length === 0) {
          return res.status(400).json({
            status: 'error',
            message: 'Body request tidak boleh kosong.'
          });
        }

        return res.status(201).json({
          status: 'success',
          message: 'Data berhasil diterima',
          dataReceived: body
        });
      }

      default: {
        // Handle Method yang Tidak Didukung
        res.setHeader('Allow', ['GET', 'POST']);
        return res.status(405).json({
          status: 'error',
          message: `Method ${method} tidak diizinkan.`
        });
      }
    }
  } catch (error) {
    // 4. Catch-all Error Handler
    console.error('Server Error:', error);
    return res.status(500).json({
      status: 'error',
      message: 'Internal Server Error',
      details: process.env.NODE_ENV === 'development' ? error.message : undefined
    });
  }
}
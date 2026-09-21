// Vercel Serverless Function Handler
// Path: api/index.js

export default async function handler(req, res) {
  // Set CORS headers to allow cross-origin requests
  res.setHeader('Access-Control-Allow-Credentials', true);
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
  );

  // Handle OPTIONS preflight requests
  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  try {
    const { method, query, body } = req;

    // Route requests based on HTTP Method
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
        // Validate request body
        if (!body || Object.keys(body).length === 0) {
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
        // Handle unsupported HTTP methods
        res.setHeader('Allow', ['GET', 'POST']);
        return res.status(405).json({
          status: 'error',
          message: `Method ${method} tidak diizinkan.`
        });
      }
    }
  } catch (error) {
    // Catch-all error handler
    console.error('Server Error:', error);
    return res.status(500).json({
      status: 'error',
      message: 'Internal Server Error',
      details: error.message
    });
  }
}
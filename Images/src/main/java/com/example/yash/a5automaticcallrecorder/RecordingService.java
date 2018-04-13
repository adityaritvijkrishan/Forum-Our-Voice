package com.example.yash.a5automaticcallrecorder;

import android.app.Service;
import android.content.Intent;
import android.media.MediaRecorder;
import android.os.Environment;
import android.os.IBinder;
import android.support.annotation.Nullable;
import android.telephony.PhoneStateListener;
import android.telephony.TelephonyManager;
import android.text.format.DateFormat;

import java.io.File;
import java.io.IOException;
import java.util.Date;

/**
 * Created by Yash on 12/6/2017.
 */

public class RecordingService extends Service {
    private MediaRecorder rec;
    private boolean recordstarted;
    private File file;
    String path="/sdcard/alarms/";
    @Nullable
    @Override
    public IBinder onBind(Intent intent) {
        return null;
    }

    @Override
    public int onStartCommand(Intent intent, int flags, int startId) {
        //return super.onStartCommand(intent, flags, startId);
        file= Environment.getExternalStoragePublicDirectory(Environment.DIRECTORY_ALARMS);
        Date date=new Date();
        CharSequence sdf= DateFormat.format("MM-dd-yy-hh-mm-ss",date.getTime());
        rec=new MediaRecorder();
        rec.setAudioSource(MediaRecorder.AudioSource.VOICE_CALL);
        rec.setOutputFormat(MediaRecorder.OutputFormat.THREE_GPP);
        rec.setOutputFile(file.getAbsolutePath()+"/"+sdf+"rec.3gp");
        rec.setAudioEncoder(MediaRecorder.AudioEncoder.AMR_NB);

        TelephonyManager manger=(TelephonyManager)getApplicationContext().getSystemService(getApplicationContext().TELEPHONY_SERVICE);
        manger.listen(new PhoneStateListener(){
            @Override
            public void onCallStateChanged(int state, String incomingNumber) {
              //  super.onCallStateChanged(state, incomingNumber){

                if (TelephonyManager.CALL_STATE_IDLE==state && rec==null){

                  rec.stop();
                  rec.reset();
                   rec.release();
                    recordstarted=false;
                    stopSelf();
                }else if(TelephonyManager.CALL_STATE_OFFHOOK==state){

                    try {
                        rec.prepare();
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                    rec.start();
                    recordstarted=true;




                }





                }

        },PhoneStateListener.LISTEN_CALL_STATE);

        return START_STICKY;



    }
}
